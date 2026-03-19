<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEventRecordsResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEventRecordsResponseBody\result\result\showContent;

class result extends Model
{
    /**
     * @var bool
     */
    public $autoAlarm;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $level;

    /**
     * @var bool
     */
    public $mustOps;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $scheduleExecuteTime;

    /**
     * @var string
     */
    public $scheduleFinishTime;

    /**
     * @var showContent
     */
    public $showContent;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'autoAlarm' => 'autoAlarm',
        'displayName' => 'displayName',
        'dryRun' => 'dryRun',
        'level' => 'level',
        'mustOps' => 'mustOps',
        'product' => 'product',
        'scheduleExecuteTime' => 'scheduleExecuteTime',
        'scheduleFinishTime' => 'scheduleFinishTime',
        'showContent' => 'showContent',
        'source' => 'source',
        'status' => 'status',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->showContent) {
            $this->showContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoAlarm) {
            $res['autoAlarm'] = $this->autoAlarm;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->mustOps) {
            $res['mustOps'] = $this->mustOps;
        }

        if (null !== $this->product) {
            $res['product'] = $this->product;
        }

        if (null !== $this->scheduleExecuteTime) {
            $res['scheduleExecuteTime'] = $this->scheduleExecuteTime;
        }

        if (null !== $this->scheduleFinishTime) {
            $res['scheduleFinishTime'] = $this->scheduleFinishTime;
        }

        if (null !== $this->showContent) {
            $res['showContent'] = null !== $this->showContent ? $this->showContent->toArray($noStream) : $this->showContent;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['autoAlarm'])) {
            $model->autoAlarm = $map['autoAlarm'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['mustOps'])) {
            $model->mustOps = $map['mustOps'];
        }

        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        if (isset($map['scheduleExecuteTime'])) {
            $model->scheduleExecuteTime = $map['scheduleExecuteTime'];
        }

        if (isset($map['scheduleFinishTime'])) {
            $model->scheduleFinishTime = $map['scheduleFinishTime'];
        }

        if (isset($map['showContent'])) {
            $model->showContent = showContent::fromMap($map['showContent']);
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
