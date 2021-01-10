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
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $configId;

    /**
     * @var ridList
     */
    public $ridList;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var channels
     */
    public $channels;

    /**
     * @var ruleList
     */
    public $ruleList;
    protected $_name = [
        'status'     => 'Status',
        'configName' => 'ConfigName',
        'updateTime' => 'UpdateTime',
        'configId'   => 'ConfigId',
        'ridList'    => 'RidList',
        'createTime' => 'CreateTime',
        'channels'   => 'Channels',
        'ruleList'   => 'RuleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->ridList) {
            $res['RidList'] = null !== $this->ridList ? $this->ridList->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->channels) {
            $res['Channels'] = null !== $this->channels ? $this->channels->toMap() : null;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = null !== $this->ruleList ? $this->ruleList->toMap() : null;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['RidList'])) {
            $model->ridList = ridList::fromMap($map['RidList']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Channels'])) {
            $model->channels = channels::fromMap($map['Channels']);
        }
        if (isset($map['RuleList'])) {
            $model->ruleList = ruleList::fromMap($map['RuleList']);
        }

        return $model;
    }
}
