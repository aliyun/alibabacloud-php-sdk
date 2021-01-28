<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class ReplaceUserClusterHostResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $newHostId;
    protected $_name = [
        'requestId' => 'RequestId',
        'newHostId' => 'NewHostId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->newHostId) {
            $res['NewHostId'] = $this->newHostId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplaceUserClusterHostResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NewHostId'])) {
            $model->newHostId = $map['NewHostId'];
        }

        return $model;
    }
}
