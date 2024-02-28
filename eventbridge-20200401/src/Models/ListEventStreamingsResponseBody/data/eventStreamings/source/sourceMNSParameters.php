<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source;

use AlibabaCloud\Tea\Model;

class sourceMNSParameters extends Model
{
    /**
     * @description Indicates whether Base64 encoding is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $isBase64Decode;

    /**
     * @description The name of the MNS queue.
     *
     * @example work4
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The ID of the region where the MNS queue resides.
     *
     * @example cn-zhangjiakou
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return sourceMNSParameters
     */
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
