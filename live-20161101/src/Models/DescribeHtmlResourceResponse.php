<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeHtmlResourceResponse\htmlResource;
use AlibabaCloud\Tea\Model;

class DescribeHtmlResourceResponse extends Model
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
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('htmlResource', $this->htmlResource, true);
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
     * @return DescribeHtmlResourceResponse
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
