<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ReleaseInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $hostId;

    /**
     * @var bool
     */
    public $releaseResult;
    protected $_name = [
        'hostId' => 'HostId',
        'releaseResult' => 'ReleaseResult',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
