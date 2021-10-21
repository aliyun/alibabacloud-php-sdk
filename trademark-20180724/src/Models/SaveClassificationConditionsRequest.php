<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class SaveClassificationConditionsRequest extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $condition;
    protected $_name = [
        'type'      => 'Type',
        'bizId'     => 'BizId',
        'condition' => 'Condition',
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
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveClassificationConditionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }

        return $model;
    }
}
