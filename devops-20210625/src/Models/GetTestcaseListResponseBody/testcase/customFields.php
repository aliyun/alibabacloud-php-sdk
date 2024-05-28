<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetTestcaseListResponseBody\testcase;

use AlibabaCloud\Tea\Model;

class customFields extends Model
{
    /**
     * @example User
     *
     * @var string
     */
    public $fieldClassName;

    /**
     * @example Input
     *
     * @var string
     */
    public $fieldFormat;

    /**
     * @example 85702b33f14bfa82cb458173ba
     *
     * @var string
     */
    public $fieldIdentifier;

    /**
     * @example d7f112f9d023e2108fa1b0d8
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'fieldClassName'  => 'fieldClassName',
        'fieldFormat'     => 'fieldFormat',
        'fieldIdentifier' => 'fieldIdentifier',
        'value'           => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldClassName) {
            $res['fieldClassName'] = $this->fieldClassName;
        }
        if (null !== $this->fieldFormat) {
            $res['fieldFormat'] = $this->fieldFormat;
        }
        if (null !== $this->fieldIdentifier) {
            $res['fieldIdentifier'] = $this->fieldIdentifier;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customFields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldClassName'])) {
            $model->fieldClassName = $map['fieldClassName'];
        }
        if (isset($map['fieldFormat'])) {
            $model->fieldFormat = $map['fieldFormat'];
        }
        if (isset($map['fieldIdentifier'])) {
            $model->fieldIdentifier = $map['fieldIdentifier'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
