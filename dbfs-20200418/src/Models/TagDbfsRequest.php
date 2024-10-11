<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class TagDbfsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example dbfs-nUy1tb********BQ4X8Gpw
     *
     * @var string
     */
    public $dbfsId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example [{"TagKey":"k1","TagValue":"v1"},{"TagKey":"k2","TagValue":"v2"}]
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'dbfsId'   => 'DbfsId',
        'regionId' => 'RegionId',
        'tags'     => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbfsId) {
            $res['DbfsId'] = $this->dbfsId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagDbfsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbfsId'])) {
            $model->dbfsId = $map['DbfsId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
