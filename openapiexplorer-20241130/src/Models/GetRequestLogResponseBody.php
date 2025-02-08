<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetRequestLogResponseBody\logInfo;

class GetRequestLogResponseBody extends Model
{
    /**
     * @var logInfo
     */
    public $logInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logInfo'   => 'logInfo',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->logInfo) {
            $this->logInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logInfo) {
            $res['logInfo'] = null !== $this->logInfo ? $this->logInfo->toArray($noStream) : $this->logInfo;
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
        if (isset($map['logInfo'])) {
            $model->logInfo = logInfo::fromMap($map['logInfo']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
