<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class RunExecutionPlanRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var mixed[]
     */
    public $arguments;
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId'        => 'RegionId',
        'id'              => 'Id',
        'arguments'       => 'Arguments',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->arguments) {
            $res['Arguments'] = $this->arguments;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunExecutionPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Arguments'])) {
            $model->arguments = $map['Arguments'];
        }

        return $model;
    }
}
