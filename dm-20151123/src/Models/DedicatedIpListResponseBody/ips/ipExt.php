<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpListResponseBody\ips;

use AlibabaCloud\Tea\Model;

class ipExt extends Model
{
    /**
     * @description Whether auto-renewal is enabled
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenewal;

    /**
     * @description Whether an email has been sent
     *
     * @example true
     *
     * @var bool
     */
    public $hasSendMail;
    protected $_name = [
        'autoRenewal' => 'AutoRenewal',
        'hasSendMail' => 'HasSendMail',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->hasSendMail) {
            $res['HasSendMail'] = $this->hasSendMail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipExt
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['HasSendMail'])) {
            $model->hasSendMail = $map['HasSendMail'];
        }

        return $model;
    }
}
