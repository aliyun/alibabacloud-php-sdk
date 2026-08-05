<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\DeleteConfigResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $configType;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'configType' => 'configType',
        'deleted' => 'deleted',
        'id' => 'id',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }

        if (null !== $this->deleted) {
            $res['deleted'] = $this->deleted;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }

        if (isset($map['deleted'])) {
            $model->deleted = $map['deleted'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
