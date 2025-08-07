<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleCategoryResponseBody\data;

use AlibabaCloud\Dara\Model;

class ruleCountInfo extends Model
{
    /**
     * @var bool
     */
    public $select;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $typeName;
    protected $_name = [
        'select' => 'Select',
        'type' => 'Type',
        'typeName' => 'TypeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->select) {
            $res['Select'] = $this->select;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
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
        if (isset($map['Select'])) {
            $model->select = $map['Select'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
