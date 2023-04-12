<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class CopyConfigRulesResponseBody extends Model
{
    /**
     * @description Indicates whether the rules are successfully replicated. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $copyRulesResult;

    /**
     * @description The ID of the request.
     *
     * @example 7BD81ECF-3194-5A6B-8719-9FC283167AD4
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'copyRulesResult' => 'CopyRulesResult',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CopyConfigRulesResponseBody
     */
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
