<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeLakebaseMountParameterTemplateListResponseBody;

use AlibabaCloud\Dara\Model;

class parameters extends Model
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
     * @var string
     */
    public $isDynamic;

    /**
     * @var string
     */
    public $isUserChangeable;

    /**
     * @var string
     */
    public $optional;

    /**
     * @var string
     */
    public $parameterName;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'comment' => 'Comment',
        'defaultValue' => 'DefaultValue',
        'isDynamic' => 'IsDynamic',
        'isUserChangeable' => 'IsUserChangeable',
        'optional' => 'Optional',
        'parameterName' => 'ParameterName',
        'unit' => 'Unit',
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

        if (null !== $this->isUserChangeable) {
            $res['IsUserChangeable'] = $this->isUserChangeable;
        }

        if (null !== $this->optional) {
            $res['Optional'] = $this->optional;
        }

        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
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

        if (isset($map['IsUserChangeable'])) {
            $model->isUserChangeable = $map['IsUserChangeable'];
        }

        if (isset($map['Optional'])) {
            $model->optional = $map['Optional'];
        }

        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
