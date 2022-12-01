<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class DeleteAccountResponseBody extends Model
{
    /**
     * @var string
     */
    public $deletionType;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deletionType' => 'DeletionType',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletionType) {
            $res['DeletionType'] = $this->deletionType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletionType'])) {
            $model->deletionType = $map['DeletionType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
