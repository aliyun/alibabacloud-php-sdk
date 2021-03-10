<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\SDK\Afs\V20180112\Models\ConfigurationStyleResponseBody\codeData;
use AlibabaCloud\Tea\Model;

class ConfigurationStyleResponseBody extends Model
{
    /**
     * @var codeData
     */
    public $codeData;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $bizCode;
    protected $_name = [
        'codeData'  => 'CodeData',
        'requestId' => 'RequestId',
        'bizCode'   => 'BizCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeData) {
            $res['CodeData'] = null !== $this->codeData ? $this->codeData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigurationStyleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeData'])) {
            $model->codeData = codeData::fromMap($map['CodeData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        return $model;
    }
}
