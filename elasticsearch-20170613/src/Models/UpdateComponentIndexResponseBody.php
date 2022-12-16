<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class UpdateComponentIndexResponseBody extends Model
{
    /**
     * @example F99407AB-2FA9-489E-A259-40CF6DCC47D9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateComponentIndexResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
