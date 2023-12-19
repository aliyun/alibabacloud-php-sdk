<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CreateOssSubDirectoryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $clientCRC;

    /**
     * @example 1
     *
     * @var string
     */
    public $ETag;

    /**
     * @example 3A0DE2E0-A37B-5EE4-9136-C4C473714802
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $serverCRC;
    protected $_name = [
        'clientCRC' => 'ClientCRC',
        'ETag'      => 'ETag',
        'requestId' => 'RequestId',
        'serverCRC' => 'ServerCRC',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientCRC) {
            $res['ClientCRC'] = $this->clientCRC;
        }
        if (null !== $this->ETag) {
            $res['ETag'] = $this->ETag;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serverCRC) {
            $res['ServerCRC'] = $this->serverCRC;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientCRC'])) {
            $model->clientCRC = $map['ClientCRC'];
        }
        if (isset($map['ETag'])) {
            $model->ETag = $map['ETag'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServerCRC'])) {
            $model->serverCRC = $map['ServerCRC'];
        }

        return $model;
    }
}
