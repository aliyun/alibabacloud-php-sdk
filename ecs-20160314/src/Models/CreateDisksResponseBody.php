<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDisksResponseBody\diskId;
use AlibabaCloud\Tea\Model;

class CreateDisksResponseBody extends Model
{
    /**
     * @var diskId
     */
    public $diskId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'diskId'    => 'DiskId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = null !== $this->diskId ? $this->diskId->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDisksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = diskId::fromMap($map['DiskId']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
