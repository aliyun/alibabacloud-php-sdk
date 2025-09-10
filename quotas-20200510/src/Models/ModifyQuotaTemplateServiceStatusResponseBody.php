<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ModifyQuotaTemplateServiceStatusResponseBody\templateServiceStatus;

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
        'requestId' => 'RequestId',
        'templateServiceStatus' => 'TemplateServiceStatus',
    ];

    public function validate()
    {
        if (null !== $this->templateServiceStatus) {
            $this->templateServiceStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->templateServiceStatus) {
            $res['TemplateServiceStatus'] = null !== $this->templateServiceStatus ? $this->templateServiceStatus->toArray($noStream) : $this->templateServiceStatus;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TemplateServiceStatus'])) {
            $model->templateServiceStatus = templateServiceStatus::fromMap($map['TemplateServiceStatus']);
        }

        return $model;
    }
}
