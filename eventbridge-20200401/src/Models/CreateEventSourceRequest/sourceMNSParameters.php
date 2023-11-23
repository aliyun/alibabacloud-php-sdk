<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventSourceRequest;

use AlibabaCloud\Tea\Model;

class sourceMNSParameters extends Model
{
    /**
     * @description Specifies whether to enable Base64 decoding. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $isBase64Decode;

    /**
     * @description The name of the MNS queue.
     *
     * @example MyQueue
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The region where the MNS queue resides. Valid values: cn-qingdao, cn-beijing, cn-zhangjiakou, cn-huhehaote, cn-wulanchabu, cn-hangzhou, cn-shanghai, cn-shenzhen, cn-guangzhou, cn-chengdu, cn-hongkong, ap-southeast-1, ap-southeast-2, ap-southeast-3, ap-southeast-5, ap-northeast-1, eu-central-1, us-west-1, us-east-1, ap-south-1, me-east-1, and cn-north-2-gov-1.
     *
     * @example cn-hangzhou
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
