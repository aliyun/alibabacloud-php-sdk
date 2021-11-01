<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetCredentialReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $generatedTime;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'content'       => 'Content',
        'generatedTime' => 'GeneratedTime',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->generatedTime) {
            $res['GeneratedTime'] = $this->generatedTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['GeneratedTime'])) {
            $model->generatedTime = $map['GeneratedTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
