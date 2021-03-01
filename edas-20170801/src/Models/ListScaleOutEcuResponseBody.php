<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListScaleOutEcuResponseBody\ecuInfoList;
use AlibabaCloud\Tea\Model;

class ListScaleOutEcuResponseBody extends Model
{
    /**
     * @var ecuInfoList
     */
    public $ecuInfoList;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'ecuInfoList' => 'EcuInfoList',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'code'        => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecuInfoList) {
            $res['EcuInfoList'] = null !== $this->ecuInfoList ? $this->ecuInfoList->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListScaleOutEcuResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcuInfoList'])) {
            $model->ecuInfoList = ecuInfoList::fromMap($map['EcuInfoList']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
