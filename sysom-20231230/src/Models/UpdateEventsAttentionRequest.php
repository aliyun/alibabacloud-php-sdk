<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class UpdateEventsAttentionRequest extends Model
{
    /**
     * @var string
     */
    public $xDebugId;

    /**
     * @var int
     */
    public $mode;

    /**
     * @var string
     */
    public $range;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $xSysomInvokeSource;
    protected $_name = [
        'xDebugId' => 'X-Debug-Id',
        'mode' => 'mode',
        'range' => 'range',
        'uuid' => 'uuid',
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

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->range) {
            $res['range'] = $this->range;
        }

        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
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

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['range'])) {
            $model->range = $map['range'];
        }

        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        if (isset($map['x-sysom-invoke-source'])) {
            $model->xSysomInvokeSource = $map['x-sysom-invoke-source'];
        }

        return $model;
    }
}
