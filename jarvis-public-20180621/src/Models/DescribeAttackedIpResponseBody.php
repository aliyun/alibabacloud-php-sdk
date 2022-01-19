<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Jarvispublic\V20180621\Models;

use AlibabaCloud\Tea\Model;

class DescribeAttackedIpResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $ipList;

    /**
     * @var string
     */
    public $module;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipList'    => 'IpList',
        'module'    => 'Module',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }
        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAttackedIpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = $map['IpList'];
            }
        }
        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
