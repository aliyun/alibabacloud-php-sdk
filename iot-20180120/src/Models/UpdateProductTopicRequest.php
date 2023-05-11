<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateProductTopicRequest extends Model
{
    /**
     * @var string
     */
    public $codec;

    /**
     * @description The description of the topic category. The description must be 1 to 100 characters in length.
     *
     * @example resubmit a test topic
     *
     * @var string
     */
    public $desc;

    /**
     * @var bool
     */
    public $enableProxySubscribe;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The operation permissions of the device on the topic category. Valid values:
     *
     *   **SUB**: Subscribe.
     *   **PUB**: Publish.
     *   **ALL**: Publish and Subscribe.
     *
     * @example PUB
     *
     * @var string
     */
    public $operation;

    /**
     * @description The ID of the topic category that you want to modify.
     *
     * @example 821****
     *
     * @var string
     */
    public $topicId;

    /**
     * @description The name of the user-defined category level that you want to set. By default, a topic category includes the following levels: \_productkey\_ and \_devicename\_. Separate the two levels with slashes (/). Format of a topic category: `productKey/deviceName/topicShortName`.
     *
     * >  Each level can contain letters, digits, and underscores (\_), and cannot be empty.
     * @example resubmit
     *
     * @var string
     */
    public $topicShortName;
    protected $_name = [
        'codec'                => 'Codec',
        'desc'                 => 'Desc',
        'enableProxySubscribe' => 'EnableProxySubscribe',
        'iotInstanceId'        => 'IotInstanceId',
        'operation'            => 'Operation',
        'topicId'              => 'TopicId',
        'topicShortName'       => 'TopicShortName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->enableProxySubscribe) {
            $res['EnableProxySubscribe'] = $this->enableProxySubscribe;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }
        if (null !== $this->topicShortName) {
            $res['TopicShortName'] = $this->topicShortName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProductTopicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['EnableProxySubscribe'])) {
            $model->enableProxySubscribe = $map['EnableProxySubscribe'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }
        if (isset($map['TopicShortName'])) {
            $model->topicShortName = $map['TopicShortName'];
        }

        return $model;
    }
}
