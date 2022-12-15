<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class DeleteTagsBatchRequest extends Model
{
    /**
     * @example ["dbfs-nUy1tb********BQ4X8Gpw","dbfs-v0WvA********tVEVcgJLg"]
     *
     * @var string
     */
    public $dbfsList;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example [{"TagKey":"k1","TagValue":"v1"},{"TagKey":"k2","TagValue":"v2"}]
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'dbfsList' => 'DbfsList',
        'regionId' => 'RegionId',
        'tags'     => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbfsList) {
            $res['DbfsList'] = $this->dbfsList;
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
     * @return DeleteTagsBatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbfsList'])) {
            $model->dbfsList = $map['DbfsList'];
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
