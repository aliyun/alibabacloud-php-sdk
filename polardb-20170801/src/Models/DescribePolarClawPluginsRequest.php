<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribePolarClawPluginsRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string[]
     */
    public $pluginList;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'pluginList' => 'PluginList',
    ];

    public function validate()
    {
        if (\is_array($this->pluginList)) {
            Model::validateArray($this->pluginList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->pluginList) {
            if (\is_array($this->pluginList)) {
                $res['PluginList'] = [];
                $n1 = 0;
                foreach ($this->pluginList as $item1) {
                    $res['PluginList'][$n1] = $item1;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['PluginList'])) {
            if (!empty($map['PluginList'])) {
                $model->pluginList = [];
                $n1 = 0;
                foreach ($map['PluginList'] as $item1) {
                    $model->pluginList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
