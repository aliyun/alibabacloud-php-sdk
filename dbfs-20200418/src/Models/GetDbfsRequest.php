<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class GetDbfsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $fsId;
    protected $_name = [
        'regionId' => 'RegionId',
        'fsId'     => 'FsId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->fsId) {
            $res['FsId'] = $this->fsId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDbfsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['FsId'])) {
            $model->fsId = $map['FsId'];
        }

        return $model;
    }
}
