<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DescribeFileUploadSignedUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $signUrl;
    protected $_name = [
        'id'        => 'Id',
        'requestId' => 'RequestId',
        'signUrl'   => 'SignUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signUrl) {
            $res['SignUrl'] = $this->signUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFileUploadSignedUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SignUrl'])) {
            $model->signUrl = $map['SignUrl'];
        }

        return $model;
    }
}
