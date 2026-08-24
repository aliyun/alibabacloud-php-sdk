<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kvcachestore\V20260617\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\AttachKVCacheStoreRequest\arns;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\AttachKVCacheStoreRequest\resourceIds;

class AttachKVCacheStoreRequest extends Model
{
    /**
     * @var arns[]
     */
    public $arns;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var resourceIds[]
     */
    public $resourceIds;
    protected $_name = [
        'arns' => 'Arns',
        'clientToken' => 'ClientToken',
        'regionId' => 'RegionId',
        'resourceIds' => 'ResourceIds',
    ];

    public function validate()
    {
        if (\is_array($this->arns)) {
            Model::validateArray($this->arns);
        }
        if (\is_array($this->resourceIds)) {
            Model::validateArray($this->resourceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arns) {
            if (\is_array($this->arns)) {
                $res['Arns'] = [];
                $n1 = 0;
                foreach ($this->arns as $item1) {
                    $res['Arns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceIds) {
            if (\is_array($this->resourceIds)) {
                $res['ResourceIds'] = [];
                $n1 = 0;
                foreach ($this->resourceIds as $item1) {
                    $res['ResourceIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Arns'])) {
            if (!empty($map['Arns'])) {
                $model->arns = [];
                $n1 = 0;
                foreach ($map['Arns'] as $item1) {
                    $model->arns[$n1] = arns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = [];
                $n1 = 0;
                foreach ($map['ResourceIds'] as $item1) {
                    $model->resourceIds[$n1] = resourceIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
