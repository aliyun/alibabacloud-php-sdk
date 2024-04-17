<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListSentinelBlockFallbackDefinitionsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example spring-cloud-a
     *
     * @var string
     */
    public $appName;

    /**
     * @example {"webRespStatusCode":429,"webRespMessage":"test","webFallbackMode":0,"webRespContentType":0}
     *
     * @var mixed[]
     */
    public $fallbackBehavior;

    /**
     * @example 12
     *
     * @var string
     */
    public $id;

    /**
     * @example defaultFallback
     *
     * @var string
     */
    public $name;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @example 1
     *
     * @var string
     */
    public $resourceClassification;

    /**
     * @example {"/params/{hot}":[1]}
     *
     * @var mixed[]
     */
    public $targetMap;
    protected $_name = [
        'appName'                => 'AppName',
        'fallbackBehavior'       => 'FallbackBehavior',
        'id'                     => 'Id',
        'name'                   => 'Name',
        'namespace'              => 'Namespace',
        'resourceClassification' => 'ResourceClassification',
        'targetMap'              => 'TargetMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->fallbackBehavior) {
            $res['FallbackBehavior'] = $this->fallbackBehavior;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->resourceClassification) {
            $res['ResourceClassification'] = $this->resourceClassification;
        }
        if (null !== $this->targetMap) {
            $res['TargetMap'] = $this->targetMap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['FallbackBehavior'])) {
            $model->fallbackBehavior = $map['FallbackBehavior'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ResourceClassification'])) {
            $model->resourceClassification = $map['ResourceClassification'];
        }
        if (isset($map['TargetMap'])) {
            $model->targetMap = $map['TargetMap'];
        }

        return $model;
    }
}
