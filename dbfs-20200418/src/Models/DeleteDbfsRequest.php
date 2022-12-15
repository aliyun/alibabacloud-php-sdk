<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class DeleteDbfsRequest extends Model
{
    /**
     * @example d-bp131n0q38u3a4zi*****
     *
     * @var string
     */
    public $fsId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'fsId'     => 'FsId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fsId) {
            $res['FsId'] = $this->fsId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDbfsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FsId'])) {
            $model->fsId = $map['FsId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
