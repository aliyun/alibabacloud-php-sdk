<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class params extends Model
{
    /**
     * @description The comments on the parameter.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The default value of the parameter.
     *
     * @example 15
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description Indicates whether the parameter immediately takes effect without requiring a restart.
     *
     * @example true
     *
     * @var int
     */
    public $isDynamic;

    /**
     * @description Indicates whether the parameter is modifiable.
     *
     * @example true
     *
     * @var int
     */
    public $isUserModifiable;

    /**
     * @description The name of the parameter.
     *
     * @example doris_scanner_thread_pool_thread_num
     *
     * @var string
     */
    public $name;

    /**
     * @description The value range of the parameter.
     *
     * @example [0-20000]
     *
     * @var string
     */
    public $optional;

    /**
     * @description The category of the parameter.
     *
     * @var string
     */
    public $paramCategory;

    /**
     * @description The current value of the parameter.
     *
     * @example 10
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'comment'          => 'Comment',
        'defaultValue'     => 'DefaultValue',
        'isDynamic'        => 'IsDynamic',
        'isUserModifiable' => 'IsUserModifiable',
        'name'             => 'Name',
        'optional'         => 'Optional',
        'paramCategory'    => 'ParamCategory',
        'value'            => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->isDynamic) {
            $res['IsDynamic'] = $this->isDynamic;
        }
        if (null !== $this->isUserModifiable) {
            $res['IsUserModifiable'] = $this->isUserModifiable;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->optional) {
            $res['Optional'] = $this->optional;
        }
        if (null !== $this->paramCategory) {
            $res['ParamCategory'] = $this->paramCategory;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return params
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['IsDynamic'])) {
            $model->isDynamic = $map['IsDynamic'];
        }
        if (isset($map['IsUserModifiable'])) {
            $model->isUserModifiable = $map['IsUserModifiable'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Optional'])) {
            $model->optional = $map['Optional'];
        }
        if (isset($map['ParamCategory'])) {
            $model->paramCategory = $map['ParamCategory'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
