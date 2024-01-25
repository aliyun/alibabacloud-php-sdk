<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeNewPlayVideoPlaySessionEventDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bizTime;

    /**
     * @var string
     */
    public $cost;

    /**
     * @var string
     */
    public $details;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $IP;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @var int
     */
    public $isNormal;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $subject;
    protected $_name = [
        'bizTime'     => 'BizTime',
        'cost'        => 'Cost',
        'details'     => 'Details',
        'eventName'   => 'EventName',
        'IP'          => 'IP',
        'ISP'         => 'ISP',
        'isNormal'    => 'IsNormal',
        'networkType' => 'NetworkType',
        'region'      => 'Region',
        'subject'     => 'Subject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizTime) {
            $res['BizTime'] = $this->bizTime;
        }
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->isNormal) {
            $res['IsNormal'] = $this->isNormal;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
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
        if (isset($map['BizTime'])) {
            $model->bizTime = $map['BizTime'];
        }
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['IsNormal'])) {
            $model->isNormal = $map['IsNormal'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }

        return $model;
    }
}
