<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeCtrlInstanceMemberAccountsResponseBody extends Model
{
    /**
     * @var int
     */
    public $instanceMemberCount;

    /**
     * @var int
     */
    public $maxInstanceMemberNum;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceMemberCount' => 'InstanceMemberCount',
        'maxInstanceMemberNum' => 'MaxInstanceMemberNum',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceMemberCount) {
            $res['InstanceMemberCount'] = $this->instanceMemberCount;
        }

        if (null !== $this->maxInstanceMemberNum) {
            $res['MaxInstanceMemberNum'] = $this->maxInstanceMemberNum;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceMemberCount'])) {
            $model->instanceMemberCount = $map['InstanceMemberCount'];
        }

        if (isset($map['MaxInstanceMemberNum'])) {
            $model->maxInstanceMemberNum = $map['MaxInstanceMemberNum'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
