<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DeleteBundlesRequest extends Model
{
    /**
     * @var string[]
     */
    public $bundleId;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'bundleId' => 'BundleId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->bundleId)) {
            Model::validateArray($this->bundleId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bundleId) {
            if (\is_array($this->bundleId)) {
                $res['BundleId'] = [];
                $n1              = 0;
                foreach ($this->bundleId as $item1) {
                    $res['BundleId'][$n1++] = $item1;
                }
            }
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
        if (isset($map['BundleId'])) {
            if (!empty($map['BundleId'])) {
                $model->bundleId = [];
                $n1              = 0;
                foreach ($map['BundleId'] as $item1) {
                    $model->bundleId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
