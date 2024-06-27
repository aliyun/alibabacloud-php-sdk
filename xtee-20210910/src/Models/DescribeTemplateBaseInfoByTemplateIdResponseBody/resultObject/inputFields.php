<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTemplateBaseInfoByTemplateIdResponseBody\resultObject;

use AlibabaCloud\Tea\Model;

class inputFields extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fieldCode;

    /**
     * @var string
     */
    public $fieldRank;

    /**
     * @var string
     */
    public $fieldSource;

    /**
     * @var string
     */
    public $fieldType;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'description' => 'description',
        'fieldCode'   => 'fieldCode',
        'fieldRank'   => 'fieldRank',
        'fieldSource' => 'fieldSource',
        'fieldType'   => 'fieldType',
        'title'       => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->fieldCode) {
            $res['fieldCode'] = $this->fieldCode;
        }
        if (null !== $this->fieldRank) {
            $res['fieldRank'] = $this->fieldRank;
        }
        if (null !== $this->fieldSource) {
            $res['fieldSource'] = $this->fieldSource;
        }
        if (null !== $this->fieldType) {
            $res['fieldType'] = $this->fieldType;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputFields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['fieldCode'])) {
            $model->fieldCode = $map['fieldCode'];
        }
        if (isset($map['fieldRank'])) {
            $model->fieldRank = $map['fieldRank'];
        }
        if (isset($map['fieldSource'])) {
            $model->fieldSource = $map['fieldSource'];
        }
        if (isset($map['fieldType'])) {
            $model->fieldType = $map['fieldType'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
