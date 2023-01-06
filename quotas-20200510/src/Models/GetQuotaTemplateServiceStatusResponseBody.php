<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaTemplateServiceStatusResponseBody\templateServiceStatus;
use AlibabaCloud\Tea\Model;

class GetQuotaTemplateServiceStatusResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the quota template.
     *
     * @var templateServiceStatus
     */
    public $templateServiceStatus;
    protected $_name = [
        'requestId'             => 'RequestId',
        'templateServiceStatus' => 'TemplateServiceStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templateServiceStatus) {
            $res['TemplateServiceStatus'] = null !== $this->templateServiceStatus ? $this->templateServiceStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQuotaTemplateServiceStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateServiceStatus'])) {
            $model->templateServiceStatus = templateServiceStatus::fromMap($map['TemplateServiceStatus']);
        }

        return $model;
    }
}
