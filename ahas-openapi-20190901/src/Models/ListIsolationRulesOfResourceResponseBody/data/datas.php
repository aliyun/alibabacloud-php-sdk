<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListIsolationRulesOfResourceResponseBody\data;

use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @var int
     */
    public $relationStrategy;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $refResource;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $limitOrigin;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'relationStrategy' => 'RelationStrategy',
        'resource'         => 'Resource',
        'appName'          => 'AppName',
        'refResource'      => 'RefResource',
        'namespace'        => 'Namespace',
        'limitOrigin'      => 'LimitOrigin',
        'threshold'        => 'Threshold',
        'ruleId'           => 'RuleId',
        'enable'           => 'Enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relationStrategy) {
            $res['RelationStrategy'] = $this->relationStrategy;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->refResource) {
            $res['RefResource'] = $this->refResource;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->limitOrigin) {
            $res['LimitOrigin'] = $this->limitOrigin;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RelationStrategy'])) {
            $model->relationStrategy = $map['RelationStrategy'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['RefResource'])) {
            $model->refResource = $map['RefResource'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['LimitOrigin'])) {
            $model->limitOrigin = $map['LimitOrigin'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
