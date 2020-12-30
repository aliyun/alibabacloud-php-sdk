<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateAccessGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $accessGroupName;
    protected $_name = [
        'requestId'       => 'RequestId',
        'accessGroupName' => 'AccessGroupName',
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
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccessGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }

        return $model;
    }
}
