<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsAppKeyResponseBody;

use AlibabaCloud\Dara\Model;

class appKey extends Model
{
    /**
     * @var string
     */
    public $appKeyId;

    /**
     * @var string
     */
    public $appKeySecret;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'appKeyId' => 'AppKeyId',
        'appKeySecret' => 'AppKeySecret',
        'createDate' => 'CreateDate',
        'createTimestamp' => 'CreateTimestamp',
        'remark' => 'Remark',
        'state' => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKeyId) {
            $res['AppKeyId'] = $this->appKeyId;
        }

        if (null !== $this->appKeySecret) {
            $res['AppKeySecret'] = $this->appKeySecret;
        }

        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['AppKeyId'])) {
            $model->appKeyId = $map['AppKeyId'];
        }

        if (isset($map['AppKeySecret'])) {
            $model->appKeySecret = $map['AppKeySecret'];
        }

        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
