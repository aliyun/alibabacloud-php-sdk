<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class CreateExplorerTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $explorerTaskId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'explorerTaskId' => 'explorerTaskId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->explorerTaskId) {
            $res['explorerTaskId'] = $this->explorerTaskId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['explorerTaskId'])) {
            $model->explorerTaskId = $map['explorerTaskId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
