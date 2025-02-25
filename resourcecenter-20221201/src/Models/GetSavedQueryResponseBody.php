<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetSavedQueryResponseBody\savedQuery;

class GetSavedQueryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var savedQuery
     */
    public $savedQuery;
    protected $_name = [
        'requestId'  => 'RequestId',
        'savedQuery' => 'SavedQuery',
    ];

    public function validate()
    {
        if (null !== $this->savedQuery) {
            $this->savedQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->savedQuery) {
            $res['SavedQuery'] = null !== $this->savedQuery ? $this->savedQuery->toArray($noStream) : $this->savedQuery;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SavedQuery'])) {
            $model->savedQuery = savedQuery::fromMap($map['SavedQuery']);
        }

        return $model;
    }
}
