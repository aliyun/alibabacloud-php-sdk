<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateMmAppRequest\bindingConfig\commands;

use AlibabaCloud\Dara\Model;

class tools extends Model
{
    /**
     * @var string
     */
    public $toolId;
    protected $_name = [
        'toolId' => 'ToolId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->toolId) {
            $res['ToolId'] = $this->toolId;
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
        if (isset($map['ToolId'])) {
            $model->toolId = $map['ToolId'];
        }

        return $model;
    }
}
