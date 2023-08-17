<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220729\Models;

use AlibabaCloud\Tea\Model;

class ExtractFeedbackRequest extends Model
{
    /**
     * @example https://gw.alipayobjects.com/os/basement_prod/598b9edf-5287-4065-9e36-464305c60698.pdf
     *
     * @var string
     */
    public $feedbackUrl;
    protected $_name = [
        'feedbackUrl' => 'FeedbackUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feedbackUrl) {
            $res['FeedbackUrl'] = $this->feedbackUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExtractFeedbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeedbackUrl'])) {
            $model->feedbackUrl = $map['FeedbackUrl'];
        }

        return $model;
    }
}
