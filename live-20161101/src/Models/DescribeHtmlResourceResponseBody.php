<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeHtmlResourceResponseBody\htmlResource;
use AlibabaCloud\Tea\Model;

class DescribeHtmlResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var htmlResource
     */
    public $htmlResource;
    protected $_name = [
        'requestId'    => 'RequestId',
        'htmlResource' => 'HtmlResource',
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
        if (null !== $this->htmlResource) {
            $res['HtmlResource'] = null !== $this->htmlResource ? $this->htmlResource->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHtmlResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HtmlResource'])) {
            $model->htmlResource = htmlResource::fromMap($map['HtmlResource']);
        }

        return $model;
    }
}
