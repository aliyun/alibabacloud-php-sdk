<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class DescribeStorageRequest extends Model
{
    /**
     * @var bool
     */
    public $usingSharedStorage;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'usingSharedStorage' => 'UsingSharedStorage',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->usingSharedStorage) {
            $res['UsingSharedStorage'] = $this->usingSharedStorage;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStorageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UsingSharedStorage'])) {
            $model->usingSharedStorage = $map['UsingSharedStorage'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
