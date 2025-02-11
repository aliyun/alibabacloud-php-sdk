<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CreateOssSubDirectoryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $clientCRC;
    /**
     * @var string
     */
    public $ETag;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
