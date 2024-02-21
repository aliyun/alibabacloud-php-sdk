<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowProjectUserRequest\user;
use AlibabaCloud\Tea\Model;

class CreateFlowProjectUserRequest extends Model
{
    /**
     * @example FP-257A173659F5****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var user[]
     */
    public $user;
    protected $_name = [
        'projectId' => 'ProjectId',
        'regionId'  => 'RegionId',
        'user'      => 'User',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->user) {
            $res['User'] = [];
            if (null !== $this->user && \is_array($this->user)) {
                $n = 0;
                foreach ($this->user as $item) {
                    $res['User'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlowProjectUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['User'])) {
            if (!empty($map['User'])) {
                $model->user = [];
                $n           = 0;
                foreach ($map['User'] as $item) {
                    $model->user[$n++] = null !== $item ? user::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
