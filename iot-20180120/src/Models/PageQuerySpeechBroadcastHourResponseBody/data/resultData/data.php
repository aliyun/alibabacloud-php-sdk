<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\PageQuerySpeechBroadcastHourResponseBody\data\resultData;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @example device1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $msg;

    /**
     * @example sd34****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example ebed9280_ba25_48df_80c2_****
     *
     * @var string
     */
    public $shareTaskCode;

    /**
     * @example 42000011392021112380****
     *
     * @var string
     */
    public $speechId;

    /**
     * @example ["ANC","CDF"]
     *
     * @var string
     */
    public $speechs;

    /**
     * @example 1663210172207
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'code'          => 'Code',
        'deviceName'    => 'DeviceName',
        'msg'           => 'Msg',
        'productKey'    => 'ProductKey',
        'shareTaskCode' => 'ShareTaskCode',
        'speechId'      => 'SpeechId',
        'speechs'       => 'Speechs',
        'startTime'     => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->shareTaskCode) {
            $res['ShareTaskCode'] = $this->shareTaskCode;
        }
        if (null !== $this->speechId) {
            $res['SpeechId'] = $this->speechId;
        }
        if (null !== $this->speechs) {
            $res['Speechs'] = $this->speechs;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ShareTaskCode'])) {
            $model->shareTaskCode = $map['ShareTaskCode'];
        }
        if (isset($map['SpeechId'])) {
            $model->speechId = $map['SpeechId'];
        }
        if (isset($map['Speechs'])) {
            $model->speechs = $map['Speechs'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
