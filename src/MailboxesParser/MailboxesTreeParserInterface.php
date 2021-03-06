<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 2017-12-01
 * Time: 10:22.
 */

namespace Ddeboer\Imap\MailboxesParser;

/**
 * Class MailboxesTreeParser.
 */
interface MailboxesTreeParserInterface
{
    /**
     * @param ParsedMailbox[] $input
     *
     * @return array
     */
    public function parse($input): array;
}
