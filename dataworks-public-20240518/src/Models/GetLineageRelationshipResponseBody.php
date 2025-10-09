<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class GetLineageRelationshipResponseBody extends Model
{
    /**
     * @var LineageRelationship
     */
    public $lineageRelationship;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'lineageRelationship' => 'LineageRelationship',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->lineageRelationship) {
            $this->lineageRelationship->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lineageRelationship) {
            $res['LineageRelationship'] = null !== $this->lineageRelationship ? $this->lineageRelationship->toArray($noStream) : $this->lineageRelationship;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
