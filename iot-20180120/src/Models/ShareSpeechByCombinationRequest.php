<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ShareSpeechByCombinationRequest extends Model
{
    /**
     * @description The audio format. Valid values: **wav**, **mp3**, and **amr**.
     *
     * @example wav
     *
     * @var string
     */
    public $audioFormat;

    /**
     * @description The combined content that you want to broadcast. The following types of content can be broadcasted:
     *
     *   The speeches that are pushed to the device. You must specify the identifiers of the speeches.
     *
     *   The custom content that you specify based on the supported format of the device.
     *
     * For example, you can create a custom speech about the amount of money in the format of `{$xxx}`. xxx is the specific amount. If you specify `{$1000}`, the device broadcasts **CNY 1000**.
     *
     * The device broadcasts the audio files in the sequence of the values that you specify in CombinationList.
     * @example ZFBDZ
     *
     * @var string[]
     */
    public $combinationList;

    /**
     * @description The **DeviceName** of the device. If you specify this parameter, you must also specify the **ProductKey** parameter.
     *
     * @example test
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The ID of the device. You can call the [QuerySpeechDevice](~~280408~~) operation to obtain the ID.
     *
     * > If you specify this parameter, you do not need to specify the **ProductKey** and **DeviceName** parameters. **IotId** specifies a globally unique identifier (GUID) of the device, which corresponds to a combination of **ProductKey** and **DeviceName**. If you specify the **IotId**, **ProductKey**, and **DeviceName** parameters, the value of the **IotId** parameter takes precedence.
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The instance ID. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * For more information, see the [Overview](~~356505~~) topic of IoT instances.
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The **ProductKey** of the product to which the device belongs. If you specify this parameter, you must also specify the **DeviceName** parameter.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The unique ID of the combined speech that you want to broadcast. This ID is issued by IoT Platform to the device.
     *
     * >  If you do not specify this parameter, IoT Platform automatically generates an ID. If you need to retry broadcasting the speech, you must specify the ID to prevent repeated broadcasting.
     * @example 42000011392021112380********
     *
     * @var string
     */
    public $speechId;
    protected $_name = [
        'audioFormat'     => 'AudioFormat',
        'combinationList' => 'CombinationList',
        'deviceName'      => 'DeviceName',
        'iotId'           => 'IotId',
        'iotInstanceId'   => 'IotInstanceId',
        'productKey'      => 'ProductKey',
        'speechId'        => 'SpeechId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioFormat) {
            $res['AudioFormat'] = $this->audioFormat;
        }
        if (null !== $this->combinationList) {
            $res['CombinationList'] = $this->combinationList;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->speechId) {
            $res['SpeechId'] = $this->speechId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ShareSpeechByCombinationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFormat'])) {
            $model->audioFormat = $map['AudioFormat'];
        }
        if (isset($map['CombinationList'])) {
            if (!empty($map['CombinationList'])) {
                $model->combinationList = $map['CombinationList'];
            }
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SpeechId'])) {
            $model->speechId = $map['SpeechId'];
        }

        return $model;
    }
}
