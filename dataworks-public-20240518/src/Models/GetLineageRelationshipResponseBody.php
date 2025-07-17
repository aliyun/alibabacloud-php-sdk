<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GetLineageRelationshipResponseBody extends Model
{
    /**
     * @var LineageRelationship
     */
    public $lineageRelationship;

    /**
     * @example 58D5334A-B013-430E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'lineageRelationship' => 'LineageRelationship',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lineageRelationship) {
            $res['LineageRelationship'] = null !== $this->lineageRelationship ? $this->lineageRelationship->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLineageRelationshipResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LineageRelationship'])) {
            $model->lineageRelationship = LineageRelationship::fromMap($map['LineageRelationship']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
