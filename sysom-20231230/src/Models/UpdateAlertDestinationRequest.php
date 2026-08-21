<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateAlertDestinationRequest\params;

class UpdateAlertDestinationRequest extends Model
{
    /**
     * @var string
     */
    public $xDebugId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appSecret;

    /**
     * @var string[]
     */
    public $groupId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $imbot;

    /**
     * @var string
     */
    public $name;

    /**
     * @var params
     */
    public $params;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $xSysomInvokeSource;
    protected $_name = [
        'xDebugId' => 'X-Debug-Id',
        'appId' => 'app_id',
        'appSecret' => 'app_secret',
        'groupId' => 'group_id',
        'id' => 'id',
        'imbot' => 'imbot',
        'name' => 'name',
        'params' => 'params',
        'source' => 'source',
        'target' => 'target',
        'xSysomInvokeSource' => 'x-sysom-invoke-source',
    ];

    public function validate()
    {
        if (\is_array($this->groupId)) {
            Model::validateArray($this->groupId);
        }
        if (null !== $this->params) {
            $this->params->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->xDebugId) {
            $res['X-Debug-Id'] = $this->xDebugId;
        }

        if (null !== $this->appId) {
            $res['app_id'] = $this->appId;
        }

        if (null !== $this->appSecret) {
            $res['app_secret'] = $this->appSecret;
        }

        if (null !== $this->groupId) {
            if (\is_array($this->groupId)) {
                $res['group_id'] = [];
                $n1 = 0;
                foreach ($this->groupId as $item1) {
                    $res['group_id'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->imbot) {
            $res['imbot'] = $this->imbot;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->params) {
            $res['params'] = null !== $this->params ? $this->params->toArray($noStream) : $this->params;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->target) {
            $res['target'] = $this->target;
        }

        if (null !== $this->xSysomInvokeSource) {
            $res['x-sysom-invoke-source'] = $this->xSysomInvokeSource;
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
        if (isset($map['X-Debug-Id'])) {
            $model->xDebugId = $map['X-Debug-Id'];
        }

        if (isset($map['app_id'])) {
            $model->appId = $map['app_id'];
        }

        if (isset($map['app_secret'])) {
            $model->appSecret = $map['app_secret'];
        }

        if (isset($map['group_id'])) {
            if (!empty($map['group_id'])) {
                $model->groupId = [];
                $n1 = 0;
                foreach ($map['group_id'] as $item1) {
                    $model->groupId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['imbot'])) {
            $model->imbot = $map['imbot'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['params'])) {
            $model->params = params::fromMap($map['params']);
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['target'])) {
            $model->target = $map['target'];
        }

        if (isset($map['x-sysom-invoke-source'])) {
            $model->xSysomInvokeSource = $map['x-sysom-invoke-source'];
        }

        return $model;
    }
}
