<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterTemplateResponseBody\templateInfo;
use AlibabaCloud\Tea\Model;

class DescribeClusterTemplateResponseBody extends Model
{
    /**
     * @var templateInfo
     */
    public $templateInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'templateInfo' => 'TemplateInfo',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateInfo) {
            $res['TemplateInfo'] = null !== $this->templateInfo ? $this->templateInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateInfo'])) {
            $model->templateInfo = templateInfo::fromMap($map['TemplateInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
