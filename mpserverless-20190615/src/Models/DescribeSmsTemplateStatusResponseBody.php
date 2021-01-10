<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSmsTemplateStatusResponseBody\templateStatuses;
use AlibabaCloud\Tea\Model;

class DescribeSmsTemplateStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var templateStatuses[]
     */
    public $templateStatuses;
    protected $_name = [
        'requestId'        => 'RequestId',
        'templateStatuses' => 'TemplateStatuses',
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
        if (null !== $this->templateStatuses) {
            $res['TemplateStatuses'] = [];
            if (null !== $this->templateStatuses && \is_array($this->templateStatuses)) {
                $n = 0;
                foreach ($this->templateStatuses as $item) {
                    $res['TemplateStatuses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSmsTemplateStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateStatuses'])) {
            if (!empty($map['TemplateStatuses'])) {
                $model->templateStatuses = [];
                $n                       = 0;
                foreach ($map['TemplateStatuses'] as $item) {
                    $model->templateStatuses[$n++] = null !== $item ? templateStatuses::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
