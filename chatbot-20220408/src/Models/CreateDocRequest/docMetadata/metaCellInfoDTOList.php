<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateDocRequest\docMetadata;

use AlibabaCloud\Tea\Model;

class metaCellInfoDTOList extends Model
{
    /**
     * @var string
     */
    public $fieldCode;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'fieldCode' => 'FieldCode',
        'fieldName' => 'FieldName',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldCode) {
            $res['FieldCode'] = $this->fieldCode;
        }
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metaCellInfoDTOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldCode'])) {
            $model->fieldCode = $map['FieldCode'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
