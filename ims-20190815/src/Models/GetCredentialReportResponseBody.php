<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetCredentialReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $generatedTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'generatedTime' => 'GeneratedTime',
        'requestId'     => 'RequestId',
        'content'       => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generatedTime) {
            $res['GeneratedTime'] = $this->generatedTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCredentialReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GeneratedTime'])) {
            $model->generatedTime = $map['GeneratedTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
