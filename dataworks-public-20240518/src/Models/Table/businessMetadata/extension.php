<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table\businessMetadata;

use AlibabaCloud\Tea\Model;

class extension extends Model
{
    /**
     * @example Dev
     *
     * @var string
     */
    public $envType;

    /**
     * @example 0
     *
     * @var int
     */
    public $favorCount;

    /**
     * @example 234
     *
     * @var int
     */
    public $projectId;

    /**
     * @example 0
     *
     * @var int
     */
    public $readCount;

    /**
     * @example 0
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return extension
     */
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
