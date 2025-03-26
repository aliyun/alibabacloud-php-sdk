<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Dara\Model;

class UpdateBusinessLogicRequest extends Model
{
    /**
     * @var string
     */
    public $businessLogicIdKey;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'businessLogicIdKey' => 'businessLogicIdKey',
        'description' => 'description',
        'type' => 'type',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessLogicIdKey) {
            $res['businessLogicIdKey'] = $this->businessLogicIdKey;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['businessLogicIdKey'])) {
            $model->businessLogicIdKey = $map['businessLogicIdKey'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
