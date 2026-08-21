<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class ListInstanceInfoRequest extends Model
{
    /**
     * @var string
     */
    public $xDebugId;

    /**
     * @var string
     */
    public $infoType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $managedType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $pluginId;

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
        'infoType' => 'infoType',
        'instanceType' => 'instanceType',
        'managedType' => 'managedType',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'pluginId' => 'pluginId',
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

        if (null !== $this->infoType) {
            $res['infoType'] = $this->infoType;
        }

        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }

        if (null !== $this->managedType) {
            $res['managedType'] = $this->managedType;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->pluginId) {
            $res['pluginId'] = $this->pluginId;
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

        if (isset($map['infoType'])) {
            $model->infoType = $map['infoType'];
        }

        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }

        if (isset($map['managedType'])) {
            $model->managedType = $map['managedType'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['pluginId'])) {
            $model->pluginId = $map['pluginId'];
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
