<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qianzhou\V20211111\Models;

use AlibabaCloud\SDK\Qianzhou\V20211111\Models\ListClusterDeprecatedAPIResponseBody\datas;
use AlibabaCloud\Tea\Model;

class ListClusterDeprecatedAPIResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var datas
     */
    public $datas;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'code',
        'datas'     => 'datas',
        'msg'       => 'msg',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->datas) {
            $res['datas'] = null !== $this->datas ? $this->datas->toMap() : null;
        }
        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterDeprecatedAPIResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['datas'])) {
            $model->datas = datas::fromMap($map['datas']);
        }
        if (isset($map['msg'])) {
            $model->msg = $map['msg'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
