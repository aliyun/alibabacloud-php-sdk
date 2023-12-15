<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class ListBotDsDetailsResponseBody extends Model
{
    /**
     * @example 72
     *
     * @var string
     */
    public $costTime;

    /**
     * @var mixed[][]
     */
    public $datas;

    /**
     * @example 078144CD-7C10-4019-9831-09BC388AAF8C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'costTime'  => 'CostTime',
        'datas'     => 'Datas',
        'requestId' => 'RequestId',
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
        if (null !== $this->datas) {
            $res['Datas'] = $this->datas;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBotDsDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }
        if (isset($map['Datas'])) {
            if (!empty($map['Datas'])) {
                $model->datas = $map['Datas'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
