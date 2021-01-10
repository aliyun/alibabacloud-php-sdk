<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleCategoryResponseBody\data;

use AlibabaCloud\Tea\Model;

class ruleCountInfo extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var bool
     */
    public $select;

    /**
     * @var string
     */
    public $typeName;
    protected $_name = [
        'type'     => 'Type',
        'select'   => 'Select',
        'typeName' => 'TypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->select) {
            $res['Select'] = $this->select;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleCountInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Select'])) {
            $model->select = $map['Select'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
