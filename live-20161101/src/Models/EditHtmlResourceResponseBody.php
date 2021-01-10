<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class EditHtmlResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $htmlResourceId;
    protected $_name = [
        'requestId'      => 'RequestId',
        'htmlResourceId' => 'HtmlResourceId',
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
        if (null !== $this->htmlResourceId) {
            $res['HtmlResourceId'] = $this->htmlResourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditHtmlResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HtmlResourceId'])) {
            $model->htmlResourceId = $map['HtmlResourceId'];
        }

        return $model;
    }
}
