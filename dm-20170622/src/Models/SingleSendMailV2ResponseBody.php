<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20170622\Models;

use AlibabaCloud\Tea\Model;

class SingleSendMailV2ResponseBody extends Model
{
    /**
     * @example xxxxxx
     *
     * @var string
     */
    public $envId;

    /**
     * @example 2D086F6-8F31-4658-84C1-006DED011A85
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'envId'     => 'EnvId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SingleSendMailV2ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
