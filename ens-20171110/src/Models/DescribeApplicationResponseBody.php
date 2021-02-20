<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeApplicationResponseBody extends Model
{
    /**
     * @var string
     */
    public $application;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'application' => 'Application',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->application) {
            $res['Application'] = $this->application;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Application'])) {
            $model->application = $map['Application'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
