<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckItemResultResponseBody\pageContentResource;
use AlibabaCloud\Tea\Model;

class DescribeRiskCheckItemResultResponseBody extends Model
{
    /**
     * @var pageContentResource
     */
    public $pageContentResource;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageContentResource' => 'PageContentResource',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageContentResource) {
            $res['PageContentResource'] = null !== $this->pageContentResource ? $this->pageContentResource->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PageContentResource'])) {
            $model->pageContentResource = pageContentResource::fromMap($map['PageContentResource']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
