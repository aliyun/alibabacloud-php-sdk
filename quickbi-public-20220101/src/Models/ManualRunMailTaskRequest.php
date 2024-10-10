<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ManualRunMailTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 3423423sdfa****sdadw
     *
     * @var string
     */
    public $mailId;
    protected $_name = [
        'mailId' => 'MailId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mailId) {
            $res['MailId'] = $this->mailId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ManualRunMailTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MailId'])) {
            $model->mailId = $map['MailId'];
        }

        return $model;
    }
}
