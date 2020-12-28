<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateIsolationRuleRequest extends Model
{
    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $relationStrategy;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $limitOrigin;

    /**
     * @var string
     */
    public $refResource;

    /**
     * @var string
     */
    public $ahasRegionId;
    protected $_name = [
        'namespace'        => 'Namespace',
        'appName'          => 'AppName',
        'relationStrategy' => 'RelationStrategy',
        'threshold'        => 'Threshold',
        'enable'           => 'Enable',
        'resource'         => 'Resource',
        'limitOrigin'      => 'LimitOrigin',
        'refResource'      => 'RefResource',
        'ahasRegionId'     => 'AhasRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->relationStrategy) {
            $res['RelationStrategy'] = $this->relationStrategy;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->limitOrigin) {
            $res['LimitOrigin'] = $this->limitOrigin;
        }
        if (null !== $this->refResource) {
            $res['RefResource'] = $this->refResource;
        }
        if (null !== $this->ahasRegionId) {
            $res['AhasRegionId'] = $this->ahasRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIsolationRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['RelationStrategy'])) {
            $model->relationStrategy = $map['RelationStrategy'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['LimitOrigin'])) {
            $model->limitOrigin = $map['LimitOrigin'];
        }
        if (isset($map['RefResource'])) {
            $model->refResource = $map['RefResource'];
        }
        if (isset($map['AhasRegionId'])) {
            $model->ahasRegionId = $map['AhasRegionId'];
        }

        return $model;
    }
}
