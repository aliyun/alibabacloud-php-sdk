<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class PushApplicationDataRequest extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $pushStrategy;
    protected $_name = [
        'data'         => 'Data',
        'appId'        => 'AppId',
        'timeout'      => 'Timeout',
        'pushStrategy' => 'PushStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->pushStrategy) {
            $res['PushStrategy'] = $this->pushStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushApplicationDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['PushStrategy'])) {
            $model->pushStrategy = $map['PushStrategy'];
        }

        return $model;
    }
}
