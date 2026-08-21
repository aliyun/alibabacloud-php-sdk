<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class ListAgentsRequest extends Model
{
    /**
     * @var string
     */
    public $xDebugId;

    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $xSysomInvokeSource;
    protected $_name = [
        'xDebugId' => 'X-Debug-Id',
        'current' => 'current',
        'name' => 'name',
        'pageSize' => 'pageSize',
        'type' => 'type',
        'xSysomInvokeSource' => 'x-sysom-invoke-source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->xDebugId) {
            $res['X-Debug-Id'] = $this->xDebugId;
        }

        if (null !== $this->current) {
            $res['current'] = $this->current;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['current'])) {
            $model->current = $map['current'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['x-sysom-invoke-source'])) {
            $model->xSysomInvokeSource = $map['x-sysom-invoke-source'];
        }

        return $model;
    }
}
