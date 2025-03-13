<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectFieldRequest;

use AlibabaCloud\Tea\Model;

class updateForOpenApiList extends Model
{
    /**
     * @example c4fd21xxxxxxxx9oj8jk
     *
     * @var string
     */
    public $fieldIdentifier;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'fieldIdentifier' => 'fieldIdentifier',
        'value'           => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return updateForOpenApiList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldIdentifier'])) {
            $model->fieldIdentifier = $map['fieldIdentifier'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
