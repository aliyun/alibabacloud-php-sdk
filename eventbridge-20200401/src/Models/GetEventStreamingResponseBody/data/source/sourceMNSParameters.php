<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source;

use AlibabaCloud\Dara\Model;

class sourceMNSParameters extends Model
{
    /**
     * @var bool
     */
    public $isBase64Decode;
    /**
     * @var string
     */
    public $queueName;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'isBase64Decode' => 'IsBase64Decode',
        'queueName'      => 'QueueName',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isBase64Decode) {
            $res['IsBase64Decode'] = $this->isBase64Decode;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['IsBase64Decode'])) {
            $model->isBase64Decode = $map['IsBase64Decode'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
