<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SelectResourceResponseBody;

use AlibabaCloud\Tea\Model;

class resourceInfoList extends Model
{
    /**
     * @example 111
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example 11
     *
     * @var int
     */
    public $lastExpire;

    /**
     * @example 1249
     *
     * @var int
     */
    public $remainCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $resourceType;

    /**
     * @example second
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'expireTime'   => 'expireTime',
        'lastExpire'   => 'lastExpire',
        'remainCount'  => 'remainCount',
        'resourceType' => 'resourceType',
        'unit'         => 'unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }
        if (null !== $this->lastExpire) {
            $res['lastExpire'] = $this->lastExpire;
        }
        if (null !== $this->remainCount) {
            $res['remainCount'] = $this->remainCount;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }
        if (isset($map['lastExpire'])) {
            $model->lastExpire = $map['lastExpire'];
        }
        if (isset($map['remainCount'])) {
            $model->remainCount = $map['remainCount'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}
