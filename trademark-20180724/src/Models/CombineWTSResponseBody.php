<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class CombineWTSResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $templateCombineUrl;
    protected $_name = [
        'requestId'          => 'RequestId',
        'templateCombineUrl' => 'TemplateCombineUrl',
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
        if (null !== $this->templateCombineUrl) {
            $res['TemplateCombineUrl'] = $this->templateCombineUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CombineWTSResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateCombineUrl'])) {
            $model->templateCombineUrl = $map['TemplateCombineUrl'];
        }

        return $model;
    }
}
