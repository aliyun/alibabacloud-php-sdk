<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models;

use AlibabaCloud\Dara\Model;

class GetOwnRequestLogRequest extends Model
{
    /**
     * @var string
     */
    public $logRequestId;
    protected $_name = [
        'logRequestId' => 'logRequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logRequestId) {
            $res['logRequestId'] = $this->logRequestId;
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
        if (isset($map['logRequestId'])) {
            $model->logRequestId = $map['logRequestId'];
        }

        return $model;
    }
}
