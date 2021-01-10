<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DescribeISVFileUploadSignedUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $signUrl;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'signUrl'   => 'SignUrl',
        'requestId' => 'RequestId',
        'id'        => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->signUrl) {
            $res['SignUrl'] = $this->signUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeISVFileUploadSignedUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SignUrl'])) {
            $model->signUrl = $map['SignUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
