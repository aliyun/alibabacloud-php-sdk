<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\CreateDeviceResponseBody\data;

use AlibabaCloud\Tea\Model;

class subDeviceSipInfo extends Model
{
    /**
     * @var string
     */
    public $channelGbId;

    /**
     * @var string
     */
    public $mondayCaptureStrategy;

    /**
     * @var string
     */
    public $tuesdayCaptureStrategy;

    /**
     * @var string
     */
    public $wednesdayCaptureStrategy;

    /**
     * @var string
     */
    public $thursdayCaptureStrategy;

    /**
     * @var string
     */
    public $fridayCaptureStrategy;

    /**
     * @var string
     */
    public $saturdayCaptureStrategy;

    /**
     * @var string
     */
    public $sundayCaptureStrategy;
    protected $_name = [
        'channelGbId'              => 'ChannelGbId',
        'mondayCaptureStrategy'    => 'MondayCaptureStrategy',
        'tuesdayCaptureStrategy'   => 'TuesdayCaptureStrategy',
        'wednesdayCaptureStrategy' => 'WednesdayCaptureStrategy',
        'thursdayCaptureStrategy'  => 'ThursdayCaptureStrategy',
        'fridayCaptureStrategy'    => 'FridayCaptureStrategy',
        'saturdayCaptureStrategy'  => 'SaturdayCaptureStrategy',
        'sundayCaptureStrategy'    => 'SundayCaptureStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelGbId) {
            $res['ChannelGbId'] = $this->channelGbId;
        }
        if (null !== $this->mondayCaptureStrategy) {
            $res['MondayCaptureStrategy'] = $this->mondayCaptureStrategy;
        }
        if (null !== $this->tuesdayCaptureStrategy) {
            $res['TuesdayCaptureStrategy'] = $this->tuesdayCaptureStrategy;
        }
        if (null !== $this->wednesdayCaptureStrategy) {
            $res['WednesdayCaptureStrategy'] = $this->wednesdayCaptureStrategy;
        }
        if (null !== $this->thursdayCaptureStrategy) {
            $res['ThursdayCaptureStrategy'] = $this->thursdayCaptureStrategy;
        }
        if (null !== $this->fridayCaptureStrategy) {
            $res['FridayCaptureStrategy'] = $this->fridayCaptureStrategy;
        }
        if (null !== $this->saturdayCaptureStrategy) {
            $res['SaturdayCaptureStrategy'] = $this->saturdayCaptureStrategy;
        }
        if (null !== $this->sundayCaptureStrategy) {
            $res['SundayCaptureStrategy'] = $this->sundayCaptureStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subDeviceSipInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelGbId'])) {
            $model->channelGbId = $map['ChannelGbId'];
        }
        if (isset($map['MondayCaptureStrategy'])) {
            $model->mondayCaptureStrategy = $map['MondayCaptureStrategy'];
        }
        if (isset($map['TuesdayCaptureStrategy'])) {
            $model->tuesdayCaptureStrategy = $map['TuesdayCaptureStrategy'];
        }
        if (isset($map['WednesdayCaptureStrategy'])) {
            $model->wednesdayCaptureStrategy = $map['WednesdayCaptureStrategy'];
        }
        if (isset($map['ThursdayCaptureStrategy'])) {
            $model->thursdayCaptureStrategy = $map['ThursdayCaptureStrategy'];
        }
        if (isset($map['FridayCaptureStrategy'])) {
            $model->fridayCaptureStrategy = $map['FridayCaptureStrategy'];
        }
        if (isset($map['SaturdayCaptureStrategy'])) {
            $model->saturdayCaptureStrategy = $map['SaturdayCaptureStrategy'];
        }
        if (isset($map['SundayCaptureStrategy'])) {
            $model->sundayCaptureStrategy = $map['SundayCaptureStrategy'];
        }

        return $model;
    }
}
