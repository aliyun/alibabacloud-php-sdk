<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DescribeProtectionModuleModeResponseBody extends Model
{
    /**
     * @var int
     */
    public $learnStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $mode;
    protected $_name = [
        'learnStatus' => 'LearnStatus',
        'requestId'   => 'RequestId',
        'mode'        => 'Mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->learnStatus) {
            $res['LearnStatus'] = $this->learnStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProtectionModuleModeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LearnStatus'])) {
            $model->learnStatus = $map['LearnStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
