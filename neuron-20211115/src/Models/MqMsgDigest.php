<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MqMsgDigest extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $retryCount;

    /**
     * @var int
     */
    public $storeSize;

    /**
     * @var string
     */
    public $storeTime;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'id' => 'Id',
        'retryCount' => 'RetryCount',
        'storeSize' => 'StoreSize',
        'storeTime' => 'StoreTime',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }

        if (null !== $this->storeSize) {
            $res['StoreSize'] = $this->storeSize;
        }

        if (null !== $this->storeTime) {
            $res['StoreTime'] = $this->storeTime;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }

        if (isset($map['StoreSize'])) {
            $model->storeSize = $map['StoreSize'];
        }

        if (isset($map['StoreTime'])) {
            $model->storeTime = $map['StoreTime'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
