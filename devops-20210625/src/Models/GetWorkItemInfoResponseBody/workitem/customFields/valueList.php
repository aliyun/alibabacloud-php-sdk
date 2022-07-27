<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemInfoResponseBody\workitem\customFields;

use AlibabaCloud\Tea\Model;

class valueList extends Model
{
    /**
     * @var string
     */
    public $displayValue;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var int
     */
    public $level;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueEn;
    protected $_name = [
        'displayValue' => 'displayValue',
        'identifier'   => 'identifier',
        'level'        => 'level',
        'value'        => 'value',
        'valueEn'      => 'valueEn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayValue) {
            $res['displayValue'] = $this->displayValue;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->valueEn) {
            $res['valueEn'] = $this->valueEn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return valueList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['displayValue'])) {
            $model->displayValue = $map['displayValue'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['valueEn'])) {
            $model->valueEn = $map['valueEn'];
        }

        return $model;
    }
}
