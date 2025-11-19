<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeCorePackageListResponseBody\corePackageInfo;

class DescribeCorePackageListResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var corePackageInfo
     */
    public $corePackageInfo;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'code' => 'Code',
        'corePackageInfo' => 'CorePackageInfo',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'traceId' => 'TraceId',
    ];

    public function validate()
    {
        if (null !== $this->corePackageInfo) {
            $this->corePackageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->corePackageInfo) {
            $res['CorePackageInfo'] = null !== $this->corePackageInfo ? $this->corePackageInfo->toArray($noStream) : $this->corePackageInfo;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CorePackageInfo'])) {
            $model->corePackageInfo = corePackageInfo::fromMap($map['CorePackageInfo']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
