<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponseBody\data\warningConfigInfo\channels;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponseBody\data\warningConfigInfo\ridList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponseBody\data\warningConfigInfo\ruleList;
use AlibabaCloud\Tea\Model;

class warningConfigInfo extends Model
{
    /**
     * @var channels
     */
    public $channels;

    /**
     * @example 32
     *
     * @var int
     */
    public $configId;

    /**
     * @var string
     */
    public $configName;

    /**
     * @example 2019-10-29T15:30Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var ridList
     */
    public $ridList;

    /**
     * @var ruleList
     */
    public $ruleList;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 2019-10-29T17:24Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'channels'   => 'Channels',
        'configId'   => 'ConfigId',
        'configName' => 'ConfigName',
        'createTime' => 'CreateTime',
        'ridList'    => 'RidList',
        'ruleList'   => 'RuleList',
        'status'     => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channels) {
            $res['Channels'] = null !== $this->channels ? $this->channels->toMap() : null;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->ridList) {
            $res['RidList'] = null !== $this->ridList ? $this->ridList->toMap() : null;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = null !== $this->ruleList ? $this->ruleList->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return warningConfigInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channels'])) {
            $model->channels = channels::fromMap($map['Channels']);
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RidList'])) {
            $model->ridList = ridList::fromMap($map['RidList']);
        }
        if (isset($map['RuleList'])) {
            $model->ruleList = ruleList::fromMap($map['RuleList']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
