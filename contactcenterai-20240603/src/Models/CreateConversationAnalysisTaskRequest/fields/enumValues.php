<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateConversationAnalysisTaskRequest\fields;

use AlibabaCloud\Tea\Model;

class enumValues extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $desc;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $enumValue;
    protected $_name = [
        'desc'      => 'desc',
        'enumValue' => 'enumValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->enumValue) {
            $res['enumValue'] = $this->enumValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return enumValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }
        if (isset($map['enumValue'])) {
            $model->enumValue = $map['enumValue'];
        }

        return $model;
    }
}
