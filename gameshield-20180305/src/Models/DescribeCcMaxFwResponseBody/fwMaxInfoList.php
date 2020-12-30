<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcMaxFwResponseBody;

use AlibabaCloud\Tea\Model;

class fwMaxInfoList extends Model
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
     * @var int
     */
    public $destPort;

    /**
     * @var int
     */
    public $action;

    /**
     * @var int
     */
    public $protocol;

    /**
     * @var bool
     */
    public $inBlackList;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'inWhiteList' => 'InWhiteList',
        'time'        => 'Time',
        'sourceIp'    => 'SourceIp',
        'destPort'    => 'DestPort',
        'action'      => 'Action',
        'protocol'    => 'Protocol',
        'inBlackList' => 'InBlackList',
        'count'       => 'Count',
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
        if (null !== $this->destPort) {
            $res['DestPort'] = $this->destPort;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->inBlackList) {
            $res['InBlackList'] = $this->inBlackList;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fwMaxInfoList
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
        if (isset($map['DestPort'])) {
            $model->destPort = $map['DestPort'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['InBlackList'])) {
            $model->inBlackList = $map['InBlackList'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
