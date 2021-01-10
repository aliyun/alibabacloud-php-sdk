<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\PictureSearchPictureResponseBody\data;

use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var int
     */
    public $eventTime;

    /**
     * @var string
     */
    public $gatewayIotId;

    /**
     * @var string
     */
    public $vectorId;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var string
     */
    public $iotId;
    protected $_name = [
        'picUrl'       => 'PicUrl',
        'eventTime'    => 'EventTime',
        'gatewayIotId' => 'GatewayIotId',
        'vectorId'     => 'VectorId',
        'threshold'    => 'Threshold',
        'iotId'        => 'IotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->gatewayIotId) {
            $res['GatewayIotId'] = $this->gatewayIotId;
        }
        if (null !== $this->vectorId) {
            $res['VectorId'] = $this->vectorId;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
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
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['GatewayIotId'])) {
            $model->gatewayIotId = $map['GatewayIotId'];
        }
        if (isset($map['VectorId'])) {
            $model->vectorId = $map['VectorId'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        return $model;
    }
}
