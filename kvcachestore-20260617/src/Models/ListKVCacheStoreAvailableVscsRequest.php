<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kvcachestore\V20260617\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\ListKVCacheStoreAvailableVscsRequest\arns;

class ListKVCacheStoreAvailableVscsRequest extends Model
{
    /**
     * @var arns[]
     */
    public $arns;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $kvcsId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'arns' => 'Arns',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'kvcsId' => 'KvcsId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->arns)) {
            Model::validateArray($this->arns);
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->kvcsId) {
            $res['KvcsId'] = $this->kvcsId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['KvcsId'])) {
            $model->kvcsId = $map['KvcsId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
