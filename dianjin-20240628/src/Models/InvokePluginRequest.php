<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class InvokePluginRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $params;
    /**
     * @var string
     */
    public $pluginId;
    protected $_name = [
        'params'   => 'params',
        'pluginId' => 'pluginId',
    ];

    public function validate()
    {
        if (\is_array($this->params)) {
            Model::validateArray($this->params);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->params) {
            if (\is_array($this->params)) {
                $res['params'] = [];
                foreach ($this->params as $key1 => $value1) {
                    $res['params'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->pluginId) {
            $res['pluginId'] = $this->pluginId;
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
        if (isset($map['params'])) {
            if (!empty($map['params'])) {
                $model->params = [];
                foreach ($map['params'] as $key1 => $value1) {
                    $model->params[$key1] = $value1;
                }
            }
        }

        if (isset($map['pluginId'])) {
            $model->pluginId = $map['pluginId'];
        }

        return $model;
    }
}
