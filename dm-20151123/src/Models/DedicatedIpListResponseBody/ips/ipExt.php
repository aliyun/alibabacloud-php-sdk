<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpListResponseBody\ips;

use AlibabaCloud\Dara\Model;

class ipExt extends Model
{
    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var bool
     */
    public $hasSendMail;

    /**
     * @var string
     */
    public $lastWarmUpTypeChangedTime;
    protected $_name = [
        'autoRenewal' => 'AutoRenewal',
        'hasSendMail' => 'HasSendMail',
        'lastWarmUpTypeChangedTime' => 'LastWarmUpTypeChangedTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }

        if (null !== $this->hasSendMail) {
            $res['HasSendMail'] = $this->hasSendMail;
        }

        if (null !== $this->lastWarmUpTypeChangedTime) {
            $res['LastWarmUpTypeChangedTime'] = $this->lastWarmUpTypeChangedTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }

        if (isset($map['HasSendMail'])) {
            $model->hasSendMail = $map['HasSendMail'];
        }

        if (isset($map['LastWarmUpTypeChangedTime'])) {
            $model->lastWarmUpTypeChangedTime = $map['LastWarmUpTypeChangedTime'];
        }

        return $model;
    }
}
