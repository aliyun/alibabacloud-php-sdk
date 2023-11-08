<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormComponentDefinitionListResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example FooterYida
     *
     * @var string
     */
    public $componentName;

    /**
     * @example formContainer_kksjiuk
     *
     * @var string
     */
    public $fieldId;

    /**
     * @example {"en_US":""}
     *
     * @var string
     */
    public $label;

    /**
     * @example formContainer_kksjiuk
     *
     * @var string
     */
    public $parentId;
    protected $_name = [
        'componentName' => 'ComponentName',
        'fieldId'       => 'FieldId',
        'label'         => 'Label',
        'parentId'      => 'ParentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->fieldId) {
            $res['FieldId'] = $this->fieldId;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
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
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['FieldId'])) {
            $model->fieldId = $map['FieldId'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        return $model;
    }
}
