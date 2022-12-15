<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class AddTagsBatchRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

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
        'clientToken' => 'ClientToken',
        'dbfsList'    => 'DbfsList',
        'regionId'    => 'RegionId',
        'tags'        => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
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
     * @return AddTagsBatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
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
