<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class GetConnectionPoolIpOperationResultResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description OssPath
     *
     * @var string[]
     */
    public $resultFilePaths;
    protected $_name = [
        'requestId'       => 'RequestId',
        'resultFilePaths' => 'ResultFilePaths',
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
        if (null !== $this->resultFilePaths) {
            $res['ResultFilePaths'] = $this->resultFilePaths;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConnectionPoolIpOperationResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultFilePaths'])) {
            if (!empty($map['ResultFilePaths'])) {
                $model->resultFilePaths = $map['ResultFilePaths'];
            }
        }

        return $model;
    }
}
