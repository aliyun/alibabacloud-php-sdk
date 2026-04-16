<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ModifyBrowserInstanceGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $browserConfigShrink;

    /**
     * @var string
     */
    public $browserInstanceGroupId;

    /**
     * @var string
     */
    public $cloudBrowserName;

    /**
     * @var int
     */
    public $maxAmount;

    /**
     * @var string
     */
    public $networkShrink;

    /**
     * @var string
     */
    public $policyShrink;

    /**
     * @var string
     */
    public $storagePolicyShrink;

    /**
     * @var string
     */
    public $timersShrink;
    protected $_name = [
        'browserConfigShrink' => 'BrowserConfig',
        'browserInstanceGroupId' => 'BrowserInstanceGroupId',
        'cloudBrowserName' => 'CloudBrowserName',
        'maxAmount' => 'MaxAmount',
        'networkShrink' => 'Network',
        'policyShrink' => 'Policy',
        'storagePolicyShrink' => 'StoragePolicy',
        'timersShrink' => 'Timers',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserConfigShrink) {
            $res['BrowserConfig'] = $this->browserConfigShrink;
        }

        if (null !== $this->browserInstanceGroupId) {
            $res['BrowserInstanceGroupId'] = $this->browserInstanceGroupId;
        }

        if (null !== $this->cloudBrowserName) {
            $res['CloudBrowserName'] = $this->cloudBrowserName;
        }

        if (null !== $this->maxAmount) {
            $res['MaxAmount'] = $this->maxAmount;
        }

        if (null !== $this->networkShrink) {
            $res['Network'] = $this->networkShrink;
        }

        if (null !== $this->policyShrink) {
            $res['Policy'] = $this->policyShrink;
        }

        if (null !== $this->storagePolicyShrink) {
            $res['StoragePolicy'] = $this->storagePolicyShrink;
        }

        if (null !== $this->timersShrink) {
            $res['Timers'] = $this->timersShrink;
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
        if (isset($map['BrowserConfig'])) {
            $model->browserConfigShrink = $map['BrowserConfig'];
        }

        if (isset($map['BrowserInstanceGroupId'])) {
            $model->browserInstanceGroupId = $map['BrowserInstanceGroupId'];
        }

        if (isset($map['CloudBrowserName'])) {
            $model->cloudBrowserName = $map['CloudBrowserName'];
        }

        if (isset($map['MaxAmount'])) {
            $model->maxAmount = $map['MaxAmount'];
        }

        if (isset($map['Network'])) {
            $model->networkShrink = $map['Network'];
        }

        if (isset($map['Policy'])) {
            $model->policyShrink = $map['Policy'];
        }

        if (isset($map['StoragePolicy'])) {
            $model->storagePolicyShrink = $map['StoragePolicy'];
        }

        if (isset($map['Timers'])) {
            $model->timersShrink = $map['Timers'];
        }

        return $model;
    }
}
