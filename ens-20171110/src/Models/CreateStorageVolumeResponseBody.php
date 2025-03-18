<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateStorageVolumeResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 7030AB96-57CF-1C68-9FEE-D60E547FD79C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array of volume IDs.
     *
     * @var string[]
     */
    public $volumeId;
    protected $_name = [
        'requestId' => 'RequestId',
        'volumeId' => 'VolumeId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStorageVolumeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VolumeId'])) {
            if (!empty($map['VolumeId'])) {
                $model->volumeId = $map['VolumeId'];
            }
        }

        return $model;
    }
}
