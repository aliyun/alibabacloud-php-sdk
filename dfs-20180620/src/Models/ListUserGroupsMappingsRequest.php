<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class ListUserGroupsMappingsRequest extends Model
{
    /**
     * @var string
     */
    public $filesystemId;

    /**
     * @var string
     */
    public $inputRegionId;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'filesystemId'  => 'FilesystemId',
        'inputRegionId' => 'InputRegionId',
        'limit'         => 'Limit',
        'nextToken'     => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filesystemId) {
            $res['FilesystemId'] = $this->filesystemId;
        }
        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserGroupsMappingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilesystemId'])) {
            $model->filesystemId = $map['FilesystemId'];
        }
        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
