<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetDisasterRecoveryItemResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetDisasterRecoveryItemResponseBody\data\topics;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $extInfo;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemStatus;

    /**
     * @var int
     */
    public $planId;

    /**
     * @var topics[]
     */
    public $topics;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'createTime',
        'extInfo' => 'extInfo',
        'itemId' => 'itemId',
        'itemStatus' => 'itemStatus',
        'planId' => 'planId',
        'topics' => 'topics',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (\is_array($this->extInfo)) {
            Model::validateArray($this->extInfo);
        }
        if (\is_array($this->topics)) {
            Model::validateArray($this->topics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->extInfo) {
            if (\is_array($this->extInfo)) {
                $res['extInfo'] = [];
                foreach ($this->extInfo as $key1 => $value1) {
                    $res['extInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->itemId) {
            $res['itemId'] = $this->itemId;
        }

        if (null !== $this->itemStatus) {
            $res['itemStatus'] = $this->itemStatus;
        }

        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }

        if (null !== $this->topics) {
            if (\is_array($this->topics)) {
                $res['topics'] = [];
                $n1 = 0;
                foreach ($this->topics as $item1) {
                    $res['topics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['extInfo'])) {
            if (!empty($map['extInfo'])) {
                $model->extInfo = [];
                foreach ($map['extInfo'] as $key1 => $value1) {
                    $model->extInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['itemId'])) {
            $model->itemId = $map['itemId'];
        }

        if (isset($map['itemStatus'])) {
            $model->itemStatus = $map['itemStatus'];
        }

        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }

        if (isset($map['topics'])) {
            if (!empty($map['topics'])) {
                $model->topics = [];
                $n1 = 0;
                foreach ($map['topics'] as $item1) {
                    $model->topics[$n1++] = topics::fromMap($item1);
                }
            }
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
