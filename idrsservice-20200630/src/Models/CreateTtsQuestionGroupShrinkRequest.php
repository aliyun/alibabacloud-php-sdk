<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateTtsQuestionGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $requestShrink;
    protected $_name = [
        'requestShrink' => 'Request',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestShrink) {
            $res['Request'] = $this->requestShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTtsQuestionGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Request'])) {
            $model->requestShrink = $map['Request'];
        }

        return $model;
    }
}
