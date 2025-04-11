<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\QueryRequestLogsResponseBody\requestLogs;

class QueryRequestLogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var requestLogs
     */
    public $requestLogs;
    protected $_name = [
        'requestId' => 'RequestId',
        'requestLogs' => 'RequestLogs',
    ];

    public function validate()
    {
        if (null !== $this->requestLogs) {
            $this->requestLogs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->requestLogs) {
            $res['RequestLogs'] = null !== $this->requestLogs ? $this->requestLogs->toArray($noStream) : $this->requestLogs;
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

        if (isset($map['RequestLogs'])) {
            $model->requestLogs = requestLogs::fromMap($map['RequestLogs']);
        }

        return $model;
    }
}
