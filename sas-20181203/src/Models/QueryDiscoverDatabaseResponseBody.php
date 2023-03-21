<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryDiscoverDatabaseResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $taskProgress;
    protected $_name = [
        'requestId'    => 'RequestId',
        'taskProgress' => 'TaskProgress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskProgress) {
            $res['TaskProgress'] = $this->taskProgress;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskProgress'])) {
            $model->taskProgress = $map['TaskProgress'];
        }

        return $model;
    }
}
