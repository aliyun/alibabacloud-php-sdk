<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ChangeCheckScopeConfigInstanceRequest extends Model
{
    /**
     * @var string[]
     */
    public $addAssetUuids;

    /**
     * @var string
     */
    public $configId;

    /**
     * @var string[]
     */
    public $deleteAssetUuids;
    protected $_name = [
        'addAssetUuids' => 'AddAssetUuids',
        'configId' => 'ConfigId',
        'deleteAssetUuids' => 'DeleteAssetUuids',
    ];

    public function validate()
    {
        if (\is_array($this->addAssetUuids)) {
            Model::validateArray($this->addAssetUuids);
        }
        if (\is_array($this->deleteAssetUuids)) {
            Model::validateArray($this->deleteAssetUuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addAssetUuids) {
            if (\is_array($this->addAssetUuids)) {
                $res['AddAssetUuids'] = [];
                $n1 = 0;
                foreach ($this->addAssetUuids as $item1) {
                    $res['AddAssetUuids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->deleteAssetUuids) {
            if (\is_array($this->deleteAssetUuids)) {
                $res['DeleteAssetUuids'] = [];
                $n1 = 0;
                foreach ($this->deleteAssetUuids as $item1) {
                    $res['DeleteAssetUuids'][$n1] = $item1;
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
        if (isset($map['AddAssetUuids'])) {
            if (!empty($map['AddAssetUuids'])) {
                $model->addAssetUuids = [];
                $n1 = 0;
                foreach ($map['AddAssetUuids'] as $item1) {
                    $model->addAssetUuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        if (isset($map['DeleteAssetUuids'])) {
            if (!empty($map['DeleteAssetUuids'])) {
                $model->deleteAssetUuids = [];
                $n1 = 0;
                foreach ($map['DeleteAssetUuids'] as $item1) {
                    $model->deleteAssetUuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
