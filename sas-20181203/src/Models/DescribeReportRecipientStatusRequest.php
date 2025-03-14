<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeReportRecipientStatusRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The email address of the recipient. Separate multiple email addresses with commas (,).
     *
     * This parameter is required.
     *
     * @example username@example.com,username@example.com
     *
     * @var string
     */
    public $recipients;

    /**
     * @description The source IP address of the request.
     *
     * @example 39.174.xxx.xxx
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'lang' => 'Lang',
        'recipients' => 'Recipients',
        'sourceIp' => 'SourceIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->recipients) {
            $res['Recipients'] = $this->recipients;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReportRecipientStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Recipients'])) {
            $model->recipients = $map['Recipients'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
