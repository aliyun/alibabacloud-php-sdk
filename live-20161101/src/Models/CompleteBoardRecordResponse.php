<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CompleteBoardRecordResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ossPath;
    protected $_name = [
        'requestId' => 'RequestId',
        'ossPath'   => 'OssPath',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('ossPath', $this->ossPath, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompleteBoardRecordResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }

        return $model;
    }
}
