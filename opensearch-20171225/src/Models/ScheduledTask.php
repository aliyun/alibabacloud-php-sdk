<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ScheduledTask\filter;

class ScheduledTask extends Model
{
    /**
     * @var bool
     */
    public $autoSwitch;

    /**
     * @var string
     */
    public $cron;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var filter
     */
    public $filter;

    /**
     * @var string
     */
    public $forkedAppId;

    /**
     * @var bool
     */
    public $permanent;

    /**
     * @var bool
     */
    public $runNow;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'autoSwitch' => 'autoSwitch',
        'cron' => 'cron',
        'enabled' => 'enabled',
        'filter' => 'filter',
        'forkedAppId' => 'forkedAppId',
        'permanent' => 'permanent',
        'runNow' => 'runNow',
        'type' => 'type',
        'version' => 'version',
    ];

    public function validate()
    {
        if (null !== $this->filter) {
            $this->filter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoSwitch) {
            $res['autoSwitch'] = $this->autoSwitch;
        }

        if (null !== $this->cron) {
            $res['cron'] = $this->cron;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->filter) {
            $res['filter'] = null !== $this->filter ? $this->filter->toArray($noStream) : $this->filter;
        }

        if (null !== $this->forkedAppId) {
            $res['forkedAppId'] = $this->forkedAppId;
        }

        if (null !== $this->permanent) {
            $res['permanent'] = $this->permanent;
        }

        if (null !== $this->runNow) {
            $res['runNow'] = $this->runNow;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['autoSwitch'])) {
            $model->autoSwitch = $map['autoSwitch'];
        }

        if (isset($map['cron'])) {
            $model->cron = $map['cron'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['filter'])) {
            $model->filter = filter::fromMap($map['filter']);
        }

        if (isset($map['forkedAppId'])) {
            $model->forkedAppId = $map['forkedAppId'];
        }

        if (isset($map['permanent'])) {
            $model->permanent = $map['permanent'];
        }

        if (isset($map['runNow'])) {
            $model->runNow = $map['runNow'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
