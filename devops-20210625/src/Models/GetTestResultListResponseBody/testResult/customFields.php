<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetTestResultListResponseBody\testResult;

use AlibabaCloud\Tea\Model;

class customFields extends Model
{
    /**
     * @var string
     */
    public $fieldClassName;

    /**
     * @var string
     */
    public $fieldFormat;

    /**
     * @var string
     */
    public $fieldIdentifier;

    /**
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
