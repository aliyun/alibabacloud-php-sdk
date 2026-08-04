<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class RevokeApiKeyRequest extends Model
{
    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $serviceIds;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'keyId' => 'KeyId',
        'regionId' => 'RegionId',
        'serviceIds' => 'ServiceIds',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->serviceIds)) {
            Model::validateArray($this->serviceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceIds) {
            if (\is_array($this->serviceIds)) {
                $res['ServiceIds'] = [];
                $n1 = 0;
                foreach ($this->serviceIds as $item1) {
                    $res['ServiceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServiceIds'])) {
            if (!empty($map['ServiceIds'])) {
                $model->serviceIds = [];
                $n1 = 0;
                foreach ($map['ServiceIds'] as $item1) {
                    $model->serviceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
