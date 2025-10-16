<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeSecurityModeResponseBody extends Model
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
     * @var int
     */
    public $securityMode;
    protected $_name = [
        'module' => 'Module',
        'requestId' => 'RequestId',
        'securityMode' => 'SecurityMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityMode) {
            $res['SecurityMode'] = $this->securityMode;
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
        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityMode'])) {
            $model->securityMode = $map['SecurityMode'];
        }

        return $model;
    }
}
