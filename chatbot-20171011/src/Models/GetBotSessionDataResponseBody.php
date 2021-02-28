<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class GetBotSessionDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $costTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[][]
     */
    public $datas;
    protected $_name = [
        'costTime'  => 'CostTime',
        'requestId' => 'RequestId',
        'datas'     => 'Datas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->datas) {
            $res['Datas'] = $this->datas;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBotSessionDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Datas'])) {
            if (!empty($map['Datas'])) {
                $model->datas = $map['Datas'];
            }
        }

        return $model;
    }
}
