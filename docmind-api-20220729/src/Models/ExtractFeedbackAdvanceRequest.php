<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220729\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ExtractFeedbackAdvanceRequest extends Model
{
    /**
     * @example https://gw.alipayobjects.com/os/basement_prod/598b9edf-5287-4065-9e36-464305c60698.pdf
     *
     * @var Stream
     */
    public $feedbackUrlObject;
    protected $_name = [
        'feedbackUrlObject' => 'FeedbackUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feedbackUrlObject) {
            $res['FeedbackUrl'] = $this->feedbackUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExtractFeedbackAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeedbackUrl'])) {
            $model->feedbackUrlObject = $map['FeedbackUrl'];
        }

        return $model;
    }
}
