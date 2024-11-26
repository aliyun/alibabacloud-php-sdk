<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ConsoleApiProxyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resultJson;
    protected $_name = [
        'requestId'  => 'requestId',
        'resultJson' => 'resultJson',
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
        if (null !== $this->resultJson) {
            $res['resultJson'] = $this->resultJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConsoleApiProxyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['resultJson'])) {
            $model->resultJson = $map['resultJson'];
        }

        return $model;
    }
}
