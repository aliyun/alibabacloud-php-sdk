<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsUdpIpSegmentsResponseBody;

use AlibabaCloud\Dara\Model;

class ipSegments extends Model
{
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
    public $id;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $mask;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $secretKey;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'createDate' => 'CreateDate',
        'createTimestamp' => 'CreateTimestamp',
        'id' => 'Id',
        'ip' => 'Ip',
        'mask' => 'Mask',
        'name' => 'Name',
        'secretKey' => 'SecretKey',
        'state' => 'State',
        'updateDate' => 'UpdateDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
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
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
