<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetCodeReviewResponseBody\codeReview;

class GetCodeReviewResponseBody extends Model
{
    /**
     * @var codeReview
     */
    public $codeReview;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'codeReview' => 'CodeReview',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->codeReview) {
            $this->codeReview->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeReview) {
            $res['CodeReview'] = null !== $this->codeReview ? $this->codeReview->toArray($noStream) : $this->codeReview;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CodeReview'])) {
            $model->codeReview = codeReview::fromMap($map['CodeReview']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
