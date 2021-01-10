<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeInvocationLogResponseBody;

use AlibabaCloud\Tea\Model;

class outputsResult extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $contentSize;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'contentType' => 'ContentType',
        'contentSize' => 'ContentSize',
        'url'         => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->contentSize) {
            $res['ContentSize'] = $this->contentSize;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputsResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['ContentSize'])) {
            $model->contentSize = $map['ContentSize'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
