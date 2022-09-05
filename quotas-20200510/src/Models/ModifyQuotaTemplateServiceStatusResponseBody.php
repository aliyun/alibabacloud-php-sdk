<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ModifyQuotaTemplateServiceStatusResponseBody\templateServiceStatus;
use AlibabaCloud\Tea\Model;

class ModifyQuotaTemplateServiceStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
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
     * @return ModifyQuotaTemplateServiceStatusResponseBody
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
