<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetFieldDefByUuidResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example NORMAL
     *
     * @var string
     */
    public $behavior;

    /**
     * @var string
     */
    public $children;

    /**
     * @example TextareaField
     *
     * @var string
     */
    public $componentName;

    /**
     * @example textField_laq7xxx
     *
     * @var string
     */
    public $fieldId;

    /**
     * @example {}
     *
     * @var mixed
     */
    public $label;

    /**
     * @example {}
     *
     * @var mixed
     */
    public $props;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'behavior'      => 'Behavior',
        'children'      => 'Children',
        'componentName' => 'ComponentName',
        'fieldId'       => 'FieldId',
        'label'         => 'Label',
        'props'         => 'Props',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->behavior) {
            $res['Behavior'] = $this->behavior;
        }
        if (null !== $this->children) {
            $res['Children'] = $this->children;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->fieldId) {
            $res['FieldId'] = $this->fieldId;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->props) {
            $res['Props'] = $this->props;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Behavior'])) {
            $model->behavior = $map['Behavior'];
        }
        if (isset($map['Children'])) {
            $model->children = $map['Children'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['FieldId'])) {
            $model->fieldId = $map['FieldId'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Props'])) {
            $model->props = $map['Props'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
