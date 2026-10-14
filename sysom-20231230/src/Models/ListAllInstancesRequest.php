<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class ListAllInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $current;

    /**
     * @var string
     */
    public $filters;

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
    public $pageSize;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'current' => 'current',
        'filters' => 'filters',
        'instanceType' => 'instanceType',
        'managedType' => 'managedType',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'pageSize' => 'pageSize',
        'pluginId' => 'pluginId',
        'region' => 'region',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }

        if (null !== $this->filters) {
            $res['filters'] = $this->filters;
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

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->pluginId) {
            $res['pluginId'] = $this->pluginId;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
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
        if (isset($map['current'])) {
            $model->current = $map['current'];
        }

        if (isset($map['filters'])) {
            $model->filters = $map['filters'];
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

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['pluginId'])) {
            $model->pluginId = $map['pluginId'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        return $model;
    }
}
