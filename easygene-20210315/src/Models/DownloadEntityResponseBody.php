<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class DownloadEntityResponseBody extends Model
{
    /**
     * @var string
     */
    public $entityCSVFile;

    /**
     * @var string
     */
    public $hostId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'entityCSVFile' => 'EntityCSVFile',
        'hostId'        => 'HostId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityCSVFile) {
            $res['EntityCSVFile'] = $this->entityCSVFile;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadEntityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityCSVFile'])) {
            $model->entityCSVFile = $map['EntityCSVFile'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
