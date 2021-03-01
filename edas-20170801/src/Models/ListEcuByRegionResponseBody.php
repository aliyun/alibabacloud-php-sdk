<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListEcuByRegionResponseBody\ecuEntityList;
use AlibabaCloud\Tea\Model;

class ListEcuByRegionResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ecuEntityList
     */
    public $ecuEntityList;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'message'       => 'Message',
        'requestId'     => 'RequestId',
        'ecuEntityList' => 'EcuEntityList',
        'code'          => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ecuEntityList) {
            $res['EcuEntityList'] = null !== $this->ecuEntityList ? $this->ecuEntityList->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEcuByRegionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EcuEntityList'])) {
            $model->ecuEntityList = ecuEntityList::fromMap($map['EcuEntityList']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
