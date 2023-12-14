<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models;

use AlibabaCloud\Tea\Model;

class GetDataServiceContextUpdateEventResponseBody extends Model
{
    /**
     * @example {\"TotalCount\": 0, \"CalcEngines\": []}
     *
     * @var string
     */
    public $data;

    /**
     * @example 0
     *
     * @var string
     */
    public $errCode;

    /**
     * @example success
     *
     * @var string
     */
    public $errMsg;

    /**
     * @example 8754EE08-4AA2-5F77-ADD7-754DBBDA9F75
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'errCode'   => 'ErrCode',
        'errMsg'    => 'ErrMsg',
        'requestId' => 'RequestId',
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
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataServiceContextUpdateEventResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
