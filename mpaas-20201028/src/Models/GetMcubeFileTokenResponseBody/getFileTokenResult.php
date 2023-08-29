<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeFileTokenResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeFileTokenResponseBody\getFileTokenResult\fileToken;
use AlibabaCloud\Tea\Model;

class getFileTokenResult extends Model
{
    /**
     * @var fileToken
     */
    public $fileToken;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'fileToken' => 'FileToken',
        'resultMsg' => 'ResultMsg',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileToken) {
            $res['FileToken'] = null !== $this->fileToken ? $this->fileToken->toMap() : null;
        }
        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return getFileTokenResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileToken'])) {
            $model->fileToken = fileToken::fromMap($map['FileToken']);
        }
        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
