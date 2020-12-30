<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckItemResultResponseBody\pageContentResource;
use AlibabaCloud\Tea\Model;

class DescribeRiskCheckItemResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pageContentResource
     */
    public $pageContentResource;
    protected $_name = [
        'requestId'           => 'RequestId',
        'pageContentResource' => 'PageContentResource',
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
        if (null !== $this->pageContentResource) {
            $res['PageContentResource'] = null !== $this->pageContentResource ? $this->pageContentResource->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRiskCheckItemResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageContentResource'])) {
            $model->pageContentResource = pageContentResource::fromMap($map['PageContentResource']);
        }

        return $model;
    }
}
