<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class UpdateVersionPrepublishActiveStatusRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $prepublishId;

    /**
     * @var string
     */
    public $isActive;
    protected $_name = [
        'projectId'    => 'ProjectId',
        'prepublishId' => 'PrepublishId',
        'isActive'     => 'IsActive',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->prepublishId) {
            $res['PrepublishId'] = $this->prepublishId;
        }
        if (null !== $this->isActive) {
            $res['IsActive'] = $this->isActive;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVersionPrepublishActiveStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['PrepublishId'])) {
            $model->prepublishId = $map['PrepublishId'];
        }
        if (isset($map['IsActive'])) {
            $model->isActive = $map['IsActive'];
        }

        return $model;
    }
}
