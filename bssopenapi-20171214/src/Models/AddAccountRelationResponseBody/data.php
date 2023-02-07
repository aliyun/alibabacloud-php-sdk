<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AddAccountRelationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description HostId
     *
     * @example HostId
     *
     * @var string
     */
    public $hostId;

    /**
     * @example RelationId
     *
     * @var int
     */
    public $relationId;
    protected $_name = [
        'hostId'     => 'HostId',
        'relationId' => 'RelationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->relationId) {
            $res['RelationId'] = $this->relationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['RelationId'])) {
            $model->relationId = $map['RelationId'];
        }

        return $model;
    }
}
