<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeUsersWithPermissionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $UIDs;
    protected $_name = [
        'requestId' => 'RequestId',
        'UIDs'      => 'UIDs',
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
        if (null !== $this->UIDs) {
            $res['UIDs'] = $this->UIDs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUsersWithPermissionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UIDs'])) {
            if (!empty($map['UIDs'])) {
                $model->UIDs = $map['UIDs'];
            }
        }

        return $model;
    }
}
