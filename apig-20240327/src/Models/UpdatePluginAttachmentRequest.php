<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class UpdatePluginAttachmentRequest extends Model
{
    /**
     * @var string[]
     */
    public $attachResourceIds;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $pluginConfig;
    protected $_name = [
        'attachResourceIds' => 'attachResourceIds',
        'enable' => 'enable',
        'pluginConfig' => 'pluginConfig',
    ];

    public function validate()
    {
        if (\is_array($this->attachResourceIds)) {
            Model::validateArray($this->attachResourceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachResourceIds) {
            if (\is_array($this->attachResourceIds)) {
                $res['attachResourceIds'] = [];
                $n1 = 0;
                foreach ($this->attachResourceIds as $item1) {
                    $res['attachResourceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->pluginConfig) {
            $res['pluginConfig'] = $this->pluginConfig;
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
        if (isset($map['attachResourceIds'])) {
            if (!empty($map['attachResourceIds'])) {
                $model->attachResourceIds = [];
                $n1 = 0;
                foreach ($map['attachResourceIds'] as $item1) {
                    $model->attachResourceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['pluginConfig'])) {
            $model->pluginConfig = $map['pluginConfig'];
        }

        return $model;
    }
}
