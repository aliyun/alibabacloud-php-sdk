<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeReportRecipientStatusResponseBody;

use AlibabaCloud\Tea\Model;

class reportRecipientList extends Model
{
    /**
     * @description Indicates whether the email address is verified. Valid values:
     *
     *   0: no
     *   1: yes
     *
     * >  If no email is specified when you create a report, the value of this parameter is empty.
     *
     * @example 1
     *
     * @var int
     */
    public $isVerify;

    /**
     * @description The email address of the report recipient.
     *
     * >  If no email is specified when you create a report, the value of this parameter is empty.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $recipient;
    protected $_name = [
        'isVerify' => 'IsVerify',
        'recipient' => 'Recipient',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->isVerify) {
            $res['IsVerify'] = $this->isVerify;
        }
        if (null !== $this->recipient) {
            $res['Recipient'] = $this->recipient;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reportRecipientList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsVerify'])) {
            $model->isVerify = $map['IsVerify'];
        }
        if (isset($map['Recipient'])) {
            $model->recipient = $map['Recipient'];
        }

        return $model;
    }
}
