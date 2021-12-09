<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\PlayerAuthResponseBody\switchList;
use AlibabaCloud\Tea\Model;

class PlayerAuthResponseBody extends Model
{
    /**
     * @var string
     */
    public $logURL;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var switchList
     */
    public $switchList;
    protected $_name = [
        'logURL'     => 'LogURL',
        'requestId'  => 'RequestId',
        'switchList' => 'SwitchList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logURL) {
            $res['LogURL'] = $this->logURL;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->switchList) {
            $res['SwitchList'] = null !== $this->switchList ? $this->switchList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PlayerAuthResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogURL'])) {
            $model->logURL = $map['LogURL'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SwitchList'])) {
            $model->switchList = switchList::fromMap($map['SwitchList']);
        }

        return $model;
    }
}
