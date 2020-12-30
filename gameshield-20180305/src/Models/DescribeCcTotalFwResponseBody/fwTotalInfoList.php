<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcTotalFwResponseBody;

use AlibabaCloud\Tea\Model;

class fwTotalInfoList extends Model
{
    /**
     * @var bool
     */
    public $inWhiteList;

    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $attackType;

    /**
     * @var bool
     */
    public $inBlackList;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $sourceLocation;
    protected $_name = [
        'inWhiteList'    => 'InWhiteList',
        'time'           => 'Time',
        'sourceIp'       => 'SourceIp',
        'attackType'     => 'AttackType',
        'inBlackList'    => 'InBlackList',
        'count'          => 'Count',
        'sourceLocation' => 'SourceLocation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inWhiteList) {
            $res['InWhiteList'] = $this->inWhiteList;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }
        if (null !== $this->inBlackList) {
            $res['InBlackList'] = $this->inBlackList;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->sourceLocation) {
            $res['SourceLocation'] = $this->sourceLocation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fwTotalInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InWhiteList'])) {
            $model->inWhiteList = $map['InWhiteList'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }
        if (isset($map['InBlackList'])) {
            $model->inBlackList = $map['InBlackList'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['SourceLocation'])) {
            $model->sourceLocation = $map['SourceLocation'];
        }

        return $model;
    }
}
