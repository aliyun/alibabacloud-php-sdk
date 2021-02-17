<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class EncodeBlindWatermarkResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $targetUri;
    protected $_name = [
        'requestId' => 'RequestId',
        'content'   => 'Content',
        'targetUri' => 'TargetUri',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->targetUri) {
            $res['TargetUri'] = $this->targetUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EncodeBlindWatermarkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['TargetUri'])) {
            $model->targetUri = $map['TargetUri'];
        }

        return $model;
    }
}
