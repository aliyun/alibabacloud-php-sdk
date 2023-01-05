<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\PictureSearchPictureResponseBody\data;

use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @example 1614500317482
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
     * @example https://XXX.XXX/XXX
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

    /**
     * @example 1
     *
     * @var int
     */
    public $vectorType;
    protected $_name = [
        'eventTime'    => 'EventTime',
        'gatewayIotId' => 'GatewayIotId',
        'iotId'        => 'IotId',
        'picUrl'       => 'PicUrl',
        'threshold'    => 'Threshold',
        'vectorId'     => 'VectorId',
        'vectorType'   => 'VectorType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->vectorType) {
            $res['VectorType'] = $this->vectorType;
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
        if (isset($map['VectorType'])) {
            $model->vectorType = $map['VectorType'];
        }

        return $model;
    }
}
