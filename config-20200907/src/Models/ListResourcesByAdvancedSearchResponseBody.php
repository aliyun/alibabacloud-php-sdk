<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListResourcesByAdvancedSearchResponseBody\queryResults;

class ListResourcesByAdvancedSearchResponseBody extends Model
{
    /**
     * @var queryResults
     */
    public $queryResults;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queryResults' => 'QueryResults',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->queryResults) {
            $this->queryResults->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queryResults) {
            $res['QueryResults'] = null !== $this->queryResults ? $this->queryResults->toArray($noStream) : $this->queryResults;
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
        if (isset($map['QueryResults'])) {
            $model->queryResults = queryResults::fromMap($map['QueryResults']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
