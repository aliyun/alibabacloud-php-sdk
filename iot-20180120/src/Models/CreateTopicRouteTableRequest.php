<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateTopicRouteTableRequest extends Model
{
    /**
     * @example /x7aWKW9****\/deviceNameTest1/user/add
     *
     * @var string[]
     */
    public $dstTopic;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The source topic. Example: `SrcTopic=/x7aWKW9 ****** /testDataToDataHub/user/update`.
     *
     * @example /x7aWKW9****\/testDataToDataHub/user/update
     *
     * @var string
     */
    public $srcTopic;
    protected $_name = [
        'dstTopic'      => 'DstTopic',
        'iotInstanceId' => 'IotInstanceId',
        'srcTopic'      => 'SrcTopic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstTopic) {
            $res['DstTopic'] = $this->dstTopic;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->srcTopic) {
            $res['SrcTopic'] = $this->srcTopic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTopicRouteTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstTopic'])) {
            if (!empty($map['DstTopic'])) {
                $model->dstTopic = $map['DstTopic'];
            }
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['SrcTopic'])) {
            $model->srcTopic = $map['SrcTopic'];
        }

        return $model;
    }
}
