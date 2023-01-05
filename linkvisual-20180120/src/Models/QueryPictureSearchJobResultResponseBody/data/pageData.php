<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchJobResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @example camera1
     *
     * @var string
     */
    public $deviceNickName;

    /**
     * @example 1614333155075
     *
     * @var int
     */
    public $eventTime;

    /**
     * @example pZJUqijOyfpFOOGNPF7S00****
     *
     * @var string
     */
    public $gatewayIotId;

    /**
     * @example 5RUngwC1RknD4lPiHgH300****
     *
     * @var string
     */
    public $iotId;

    /**
     * @example https://xxx.xxx.xxx.com/xxx
     *
     * @var string
     */
    public $picUrl;

    /**
     * @example 0.5
     *
     * @var float
     */
    public $threshold;

    /**
     * @example vectorId86d9a5c32b9947278e526c2eef8a****
     *
     * @var string
     */
    public $vectorId;
    protected $_name = [
        'deviceNickName' => 'DeviceNickName',
        'eventTime'      => 'EventTime',
        'gatewayIotId'   => 'GatewayIotId',
        'iotId'          => 'IotId',
        'picUrl'         => 'PicUrl',
        'threshold'      => 'Threshold',
        'vectorId'       => 'VectorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceNickName) {
            $res['DeviceNickName'] = $this->deviceNickName;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->gatewayIotId) {
            $res['GatewayIotId'] = $this->gatewayIotId;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->vectorId) {
            $res['VectorId'] = $this->vectorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceNickName'])) {
            $model->deviceNickName = $map['DeviceNickName'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['GatewayIotId'])) {
            $model->gatewayIotId = $map['GatewayIotId'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['VectorId'])) {
            $model->vectorId = $map['VectorId'];
        }

        return $model;
    }
}
