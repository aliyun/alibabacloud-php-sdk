<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateGdnInstanceResponseBody extends Model
{
    /**
     * @var int
     */
    public $gdnInstanceId;

    /**
     * @var string
     */
    public $gdnInstanceName;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'gdnInstanceId'   => 'GdnInstanceId',
        'gdnInstanceName' => 'GdnInstanceName',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gdnInstanceId) {
            $res['GdnInstanceId'] = $this->gdnInstanceId;
        }
        if (null !== $this->gdnInstanceName) {
            $res['GdnInstanceName'] = $this->gdnInstanceName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGdnInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GdnInstanceId'])) {
            $model->gdnInstanceId = $map['GdnInstanceId'];
        }
        if (isset($map['GdnInstanceName'])) {
            $model->gdnInstanceName = $map['GdnInstanceName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
