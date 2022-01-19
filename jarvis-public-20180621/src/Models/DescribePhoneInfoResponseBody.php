<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Jarvispublic\V20180621\Models;

use AlibabaCloud\Tea\Model;

class DescribePhoneInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $module;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $detectTime;

    /**
     * @var int
     */
    public $phoneNum;

    /**
     * @var int
     */
    public $riskLevel;
    protected $_name = [
        'module'     => 'Module',
        'requestId'  => 'RequestId',
        'detectTime' => 'detectTime',
        'phoneNum'   => 'phoneNum',
        'riskLevel'  => 'riskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->detectTime) {
            $res['detectTime'] = $this->detectTime;
        }
        if (null !== $this->phoneNum) {
            $res['phoneNum'] = $this->phoneNum;
        }
        if (null !== $this->riskLevel) {
            $res['riskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePhoneInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['detectTime'])) {
            $model->detectTime = $map['detectTime'];
        }
        if (isset($map['phoneNum'])) {
            $model->phoneNum = $map['phoneNum'];
        }
        if (isset($map['riskLevel'])) {
            $model->riskLevel = $map['riskLevel'];
        }

        return $model;
    }
}
