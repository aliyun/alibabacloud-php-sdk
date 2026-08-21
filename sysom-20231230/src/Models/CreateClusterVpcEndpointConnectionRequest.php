<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class CreateClusterVpcEndpointConnectionRequest extends Model
{
    /**
     * @var string
     */
    public $xDebugId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $xSysomInvokeSource;
    protected $_name = [
        'xDebugId' => 'X-Debug-Id',
        'clusterId' => 'clusterId',
        'dryRun' => 'dryRun',
        'region' => 'region',
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

        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
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

        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['x-sysom-invoke-source'])) {
            $model->xSysomInvokeSource = $map['x-sysom-invoke-source'];
        }

        return $model;
    }
}
