<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateRepoSyncRuleResponseBody extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @example 8F8A0BA6-7F06-4BAE-B147-10BD6A25****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example crsr-gk5p2ns1kzns****
     *
     * @var string
     */
    public $syncRuleId;
    protected $_name = [
        'code'       => 'Code',
        'isSuccess'  => 'IsSuccess',
        'requestId'  => 'RequestId',
        'syncRuleId' => 'SyncRuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->syncRuleId) {
            $res['SyncRuleId'] = $this->syncRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRepoSyncRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SyncRuleId'])) {
            $model->syncRuleId = $map['SyncRuleId'];
        }

        return $model;
    }
}
