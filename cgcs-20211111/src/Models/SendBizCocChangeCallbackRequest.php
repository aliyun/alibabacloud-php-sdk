<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class SendBizCocChangeCallbackRequest extends Model
{
    /**
     * @var string
     */
    public $platformSessionId;

    /**
     * @var bool
     */
    public $result;
    protected $_name = [
        'platformSessionId' => 'PlatformSessionId',
        'result'            => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->platformSessionId) {
            $res['PlatformSessionId'] = $this->platformSessionId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendBizCocChangeCallbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlatformSessionId'])) {
            $model->platformSessionId = $map['PlatformSessionId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
