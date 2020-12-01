<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetCredentialReportResponse extends Model
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
    public $generatedTime;
    protected $_name = [
        'requestId'     => 'RequestId',
        'content'       => 'Content',
        'generatedTime' => 'GeneratedTime',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('generatedTime', $this->generatedTime, true);
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
        if (null !== $this->generatedTime) {
            $res['GeneratedTime'] = $this->generatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCredentialReportResponse
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
        if (isset($map['GeneratedTime'])) {
            $model->generatedTime = $map['GeneratedTime'];
        }

        return $model;
    }
}
