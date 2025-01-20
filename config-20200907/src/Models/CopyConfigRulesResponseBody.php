<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class CopyConfigRulesResponseBody extends Model
{
    /**
     * @var bool
     */
    public $copyRulesResult;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'copyRulesResult' => 'CopyRulesResult',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->copyRulesResult) {
            $res['CopyRulesResult'] = $this->copyRulesResult;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CopyRulesResult'])) {
            $model->copyRulesResult = $map['CopyRulesResult'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
