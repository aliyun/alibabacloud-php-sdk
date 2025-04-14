<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table\businessMetadata;

use AlibabaCloud\Dara\Model;

class extension extends Model
{
    /**
     * @var string
     */
    public $envType;

    /**
     * @var int
     */
    public $favorCount;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $readCount;

    /**
     * @var int
     */
    public $viewCount;
    protected $_name = [
        'envType' => 'EnvType',
        'favorCount' => 'FavorCount',
        'projectId' => 'ProjectId',
        'readCount' => 'ReadCount',
        'viewCount' => 'ViewCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->favorCount) {
            $res['FavorCount'] = $this->favorCount;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->readCount) {
            $res['ReadCount'] = $this->readCount;
        }

        if (null !== $this->viewCount) {
            $res['ViewCount'] = $this->viewCount;
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
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['FavorCount'])) {
            $model->favorCount = $map['FavorCount'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ReadCount'])) {
            $model->readCount = $map['ReadCount'];
        }

        if (isset($map['ViewCount'])) {
            $model->viewCount = $map['ViewCount'];
        }

        return $model;
    }
}
