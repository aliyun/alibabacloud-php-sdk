<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpgradeEngineVersionResponseBody\result;

use AlibabaCloud\Tea\Model;

class validateResult extends Model
{
    /**
     * @var string
     */
    public $errorType;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;
    protected $_name = [
        'errorType' => 'errorType',
        'errorCode' => 'errorCode',
        'errorMsg'  => 'errorMsg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorType) {
            $res['errorType'] = $this->errorType;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return validateResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorType'])) {
            $model->errorType = $map['errorType'];
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        return $model;
    }
}
