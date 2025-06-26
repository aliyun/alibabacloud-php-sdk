<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceConfigResponseBody\data;

use AlibabaCloud\Dara\Model;

class params extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var int
     */
    public $isDynamic;

    /**
     * @var int
     */
    public $isUserModifiable;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $optional;

    /**
     * @var string
     */
    public $paramRelyRule;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'comment' => 'Comment',
        'defaultValue' => 'DefaultValue',
        'isDynamic' => 'IsDynamic',
        'isUserModifiable' => 'IsUserModifiable',
        'name' => 'Name',
        'optional' => 'Optional',
        'paramRelyRule' => 'ParamRelyRule',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->paramRelyRule) {
            $res['ParamRelyRule'] = $this->paramRelyRule;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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

        if (isset($map['ParamRelyRule'])) {
            $model->paramRelyRule = $map['ParamRelyRule'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
