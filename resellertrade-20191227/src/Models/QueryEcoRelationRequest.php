<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models;

use AlibabaCloud\Tea\Model;

class QueryEcoRelationRequest extends Model
{
    /**
     * @var string
     */
    public $relationTime;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'relationTime' => 'RelationTime',
        'uid'          => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relationTime) {
            $res['RelationTime'] = $this->relationTime;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEcoRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RelationTime'])) {
            $model->relationTime = $map['RelationTime'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
