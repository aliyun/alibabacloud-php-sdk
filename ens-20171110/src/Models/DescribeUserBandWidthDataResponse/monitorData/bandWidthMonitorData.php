<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeUserBandWidthDataResponse\monitorData;

use AlibabaCloud\Tea\Model;

class bandWidthMonitorData extends Model
{
    /**
     * @var int
     */
    public $upBandWidth;

    /**
     * @var int
     */
    public $downBandWidth;

    /**
     * @var int
     */
    public $internetTX;

    /**
     * @var int
     */
    public $internetRX;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'upBandWidth'   => 'UpBandWidth',
        'downBandWidth' => 'DownBandWidth',
        'internetTX'    => 'InternetTX',
        'internetRX'    => 'InternetRX',
        'timeStamp'     => 'TimeStamp',
    ];

    public function validate()
    {
        Model::validateRequired('upBandWidth', $this->upBandWidth, true);
        Model::validateRequired('downBandWidth', $this->downBandWidth, true);
        Model::validateRequired('internetTX', $this->internetTX, true);
        Model::validateRequired('internetRX', $this->internetRX, true);
        Model::validateRequired('timeStamp', $this->timeStamp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->upBandWidth) {
            $res['UpBandWidth'] = $this->upBandWidth;
        }
        if (null !== $this->downBandWidth) {
            $res['DownBandWidth'] = $this->downBandWidth;
        }
        if (null !== $this->internetTX) {
            $res['InternetTX'] = $this->internetTX;
        }
        if (null !== $this->internetRX) {
            $res['InternetRX'] = $this->internetRX;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandWidthMonitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpBandWidth'])) {
            $model->upBandWidth = $map['UpBandWidth'];
        }
        if (isset($map['DownBandWidth'])) {
            $model->downBandWidth = $map['DownBandWidth'];
        }
        if (isset($map['InternetTX'])) {
            $model->internetTX = $map['InternetTX'];
        }
        if (isset($map['InternetRX'])) {
            $model->internetRX = $map['InternetRX'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
