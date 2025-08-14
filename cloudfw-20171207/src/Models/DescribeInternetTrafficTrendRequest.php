<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeInternetTrafficTrendRequest extends Model
{
    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceCode;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $srcPrivateIP;

    /**
     * @var string
     */
    public $srcPublicIP;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $trafficType;
    protected $_name = [
        'direction' => 'Direction',
        'endTime' => 'EndTime',
        'lang' => 'Lang',
        'sourceCode' => 'SourceCode',
        'sourceIp' => 'SourceIp',
        'srcPrivateIP' => 'SrcPrivateIP',
        'srcPublicIP' => 'SrcPublicIP',
        'startTime' => 'StartTime',
        'trafficType' => 'TrafficType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->sourceCode) {
            $res['SourceCode'] = $this->sourceCode;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->srcPrivateIP) {
            $res['SrcPrivateIP'] = $this->srcPrivateIP;
        }

        if (null !== $this->srcPublicIP) {
            $res['SrcPublicIP'] = $this->srcPublicIP;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->trafficType) {
            $res['TrafficType'] = $this->trafficType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['SourceCode'])) {
            $model->sourceCode = $map['SourceCode'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['SrcPrivateIP'])) {
            $model->srcPrivateIP = $map['SrcPrivateIP'];
        }

        if (isset($map['SrcPublicIP'])) {
            $model->srcPublicIP = $map['SrcPublicIP'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TrafficType'])) {
            $model->trafficType = $map['TrafficType'];
        }

        return $model;
    }
}
