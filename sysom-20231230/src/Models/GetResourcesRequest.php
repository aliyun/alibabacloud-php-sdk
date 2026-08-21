<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class GetResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $xDebugId;

    /**
     * @var string
     */
    public $cluster;

    /**
     * @var string
     */
    public $instance;

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
        'cluster' => 'cluster',
        'instance' => 'instance',
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

        if (null !== $this->cluster) {
            $res['cluster'] = $this->cluster;
        }

        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
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

        if (isset($map['cluster'])) {
            $model->cluster = $map['cluster'];
        }

        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
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
