<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\GetTrackListByMailFromAndTagNameResponseBody\trackList;

use AlibabaCloud\Tea\Model;

class stat extends Model
{
    /**
     * @var string
     */
    public $rcptClickRate;

    /**
     * @var string
     */
    public $rcptUniqueOpenCount;

    /**
     * @var string
     */
    public $rcptClickCount;

    /**
     * @var string
     */
    public $rcptUniqueClickCount;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $rcptUniqueOpenRate;

    /**
     * @var string
     */
    public $rcptUniqueClickRate;

    /**
     * @var string
     */
    public $totalNumber;

    /**
     * @var string
     */
    public $rcptOpenRate;

    /**
     * @var string
     */
    public $rcptOpenCount;
    protected $_name = [
        'rcptClickRate'        => 'RcptClickRate',
        'rcptUniqueOpenCount'  => 'RcptUniqueOpenCount',
        'rcptClickCount'       => 'RcptClickCount',
        'rcptUniqueClickCount' => 'RcptUniqueClickCount',
        'createTime'           => 'CreateTime',
        'rcptUniqueOpenRate'   => 'RcptUniqueOpenRate',
        'rcptUniqueClickRate'  => 'RcptUniqueClickRate',
        'totalNumber'          => 'TotalNumber',
        'rcptOpenRate'         => 'RcptOpenRate',
        'rcptOpenCount'        => 'RcptOpenCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rcptClickRate) {
            $res['RcptClickRate'] = $this->rcptClickRate;
        }
        if (null !== $this->rcptUniqueOpenCount) {
            $res['RcptUniqueOpenCount'] = $this->rcptUniqueOpenCount;
        }
        if (null !== $this->rcptClickCount) {
            $res['RcptClickCount'] = $this->rcptClickCount;
        }
        if (null !== $this->rcptUniqueClickCount) {
            $res['RcptUniqueClickCount'] = $this->rcptUniqueClickCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->rcptUniqueOpenRate) {
            $res['RcptUniqueOpenRate'] = $this->rcptUniqueOpenRate;
        }
        if (null !== $this->rcptUniqueClickRate) {
            $res['RcptUniqueClickRate'] = $this->rcptUniqueClickRate;
        }
        if (null !== $this->totalNumber) {
            $res['TotalNumber'] = $this->totalNumber;
        }
        if (null !== $this->rcptOpenRate) {
            $res['RcptOpenRate'] = $this->rcptOpenRate;
        }
        if (null !== $this->rcptOpenCount) {
            $res['RcptOpenCount'] = $this->rcptOpenCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RcptClickRate'])) {
            $model->rcptClickRate = $map['RcptClickRate'];
        }
        if (isset($map['RcptUniqueOpenCount'])) {
            $model->rcptUniqueOpenCount = $map['RcptUniqueOpenCount'];
        }
        if (isset($map['RcptClickCount'])) {
            $model->rcptClickCount = $map['RcptClickCount'];
        }
        if (isset($map['RcptUniqueClickCount'])) {
            $model->rcptUniqueClickCount = $map['RcptUniqueClickCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RcptUniqueOpenRate'])) {
            $model->rcptUniqueOpenRate = $map['RcptUniqueOpenRate'];
        }
        if (isset($map['RcptUniqueClickRate'])) {
            $model->rcptUniqueClickRate = $map['RcptUniqueClickRate'];
        }
        if (isset($map['TotalNumber'])) {
            $model->totalNumber = $map['TotalNumber'];
        }
        if (isset($map['RcptOpenRate'])) {
            $model->rcptOpenRate = $map['RcptOpenRate'];
        }
        if (isset($map['RcptOpenCount'])) {
            $model->rcptOpenCount = $map['RcptOpenCount'];
        }

        return $model;
    }
}
