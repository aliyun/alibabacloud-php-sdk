<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CreateSecretTransferRecordRequest extends Model
{
    /**
     * @var string
     */
    public $lastPartnerKey;

    /**
     * @var string
     */
    public $numberList;

    /**
     * @var string
     */
    public $originPartnerKey;
    protected $_name = [
        'lastPartnerKey' => 'LastPartnerKey',
        'numberList' => 'NumberList',
        'originPartnerKey' => 'OriginPartnerKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastPartnerKey) {
            $res['LastPartnerKey'] = $this->lastPartnerKey;
        }

        if (null !== $this->numberList) {
            $res['NumberList'] = $this->numberList;
        }

        if (null !== $this->originPartnerKey) {
            $res['OriginPartnerKey'] = $this->originPartnerKey;
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
        if (isset($map['LastPartnerKey'])) {
            $model->lastPartnerKey = $map['LastPartnerKey'];
        }

        if (isset($map['NumberList'])) {
            $model->numberList = $map['NumberList'];
        }

        if (isset($map['OriginPartnerKey'])) {
            $model->originPartnerKey = $map['OriginPartnerKey'];
        }

        return $model;
    }
}
