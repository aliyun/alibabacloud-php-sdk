<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class PushApplicationDataRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $pushStrategy;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'appId' => 'AppId',
        'data' => 'Data',
        'pushStrategy' => 'PushStrategy',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->pushStrategy) {
            $res['PushStrategy'] = $this->pushStrategy;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['PushStrategy'])) {
            $model->pushStrategy = $map['PushStrategy'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
