<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeBasicSearchPageListResponseBody\resultObject;

use AlibabaCloud\Tea\Model;

class header extends Model
{
    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $fieldTitle;

    /**
     * @var bool
     */
    public $isDefault;
    protected $_name = [
        'fieldName'  => 'fieldName',
        'fieldTitle' => 'fieldTitle',
        'isDefault'  => 'isDefault',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldName) {
            $res['fieldName'] = $this->fieldName;
        }
        if (null !== $this->fieldTitle) {
            $res['fieldTitle'] = $this->fieldTitle;
        }
        if (null !== $this->isDefault) {
            $res['isDefault'] = $this->isDefault;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return header
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldName'])) {
            $model->fieldName = $map['fieldName'];
        }
        if (isset($map['fieldTitle'])) {
            $model->fieldTitle = $map['fieldTitle'];
        }
        if (isset($map['isDefault'])) {
            $model->isDefault = $map['isDefault'];
        }

        return $model;
    }
}
