<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameResponseBody;

use AlibabaCloud\Dara\Model;

class fields extends Model
{
    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var int
     */
    public $sort;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'fieldName' => 'FieldName',
        'sort' => 'Sort',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
