<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ReleaseInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example cn
     *
     * @var string
     */
    public $hostId;

    /**
     * @example true
     *
     * @var bool
     */
    public $releaseResult;
    protected $_name = [
        'hostId'        => 'HostId',
        'releaseResult' => 'ReleaseResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->releaseResult) {
            $res['ReleaseResult'] = $this->releaseResult;
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
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['ReleaseResult'])) {
            $model->releaseResult = $map['ReleaseResult'];
        }

        return $model;
    }
}
