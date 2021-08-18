<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryDiscoverDatabaseResponseBody extends Model
{
    /**
     * @var int
     */
    public $taskProgress;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'taskProgress' => 'TaskProgress',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskProgress) {
            $res['TaskProgress'] = $this->taskProgress;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDiscoverDatabaseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskProgress'])) {
            $model->taskProgress = $map['TaskProgress'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
