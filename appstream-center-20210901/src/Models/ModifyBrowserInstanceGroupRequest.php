<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest\browserConfig;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest\network;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest\policy;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest\timers;

class ModifyBrowserInstanceGroupRequest extends Model
{
    /**
     * @var browserConfig
     */
    public $browserConfig;

    /**
     * @var string
     */
    public $browserInstanceGroupId;

    /**
     * @var string
     */
    public $cloudBrowserName;

    /**
     * @var network
     */
    public $network;

    /**
     * @var policy
     */
    public $policy;

    /**
     * @var timers[]
     */
    public $timers;
    protected $_name = [
        'browserConfig' => 'BrowserConfig',
        'browserInstanceGroupId' => 'BrowserInstanceGroupId',
        'cloudBrowserName' => 'CloudBrowserName',
        'network' => 'Network',
        'policy' => 'Policy',
        'timers' => 'Timers',
    ];

    public function validate()
    {
        if (null !== $this->browserConfig) {
            $this->browserConfig->validate();
        }
        if (null !== $this->network) {
            $this->network->validate();
        }
        if (null !== $this->policy) {
            $this->policy->validate();
        }
        if (\is_array($this->timers)) {
            Model::validateArray($this->timers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserConfig) {
            $res['BrowserConfig'] = null !== $this->browserConfig ? $this->browserConfig->toArray($noStream) : $this->browserConfig;
        }

        if (null !== $this->browserInstanceGroupId) {
            $res['BrowserInstanceGroupId'] = $this->browserInstanceGroupId;
        }

        if (null !== $this->cloudBrowserName) {
            $res['CloudBrowserName'] = $this->cloudBrowserName;
        }

        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
        }

        if (null !== $this->policy) {
            $res['Policy'] = null !== $this->policy ? $this->policy->toArray($noStream) : $this->policy;
        }

        if (null !== $this->timers) {
            if (\is_array($this->timers)) {
                $res['Timers'] = [];
                $n1 = 0;
                foreach ($this->timers as $item1) {
                    $res['Timers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            $model->browserConfig = browserConfig::fromMap($map['BrowserConfig']);
        }

        if (isset($map['BrowserInstanceGroupId'])) {
            $model->browserInstanceGroupId = $map['BrowserInstanceGroupId'];
        }

        if (isset($map['CloudBrowserName'])) {
            $model->cloudBrowserName = $map['CloudBrowserName'];
        }

        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }

        if (isset($map['Policy'])) {
            $model->policy = policy::fromMap($map['Policy']);
        }

        if (isset($map['Timers'])) {
            if (!empty($map['Timers'])) {
                $model->timers = [];
                $n1 = 0;
                foreach ($map['Timers'] as $item1) {
                    $model->timers[$n1] = timers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
