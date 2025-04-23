<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListSecurityGroupsResponseBody\securityGroups;

class ListSecurityGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityGroups
     */
    public $securityGroups;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityGroups' => 'SecurityGroups',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->securityGroups) {
            $this->securityGroups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityGroups) {
            $res['SecurityGroups'] = null !== $this->securityGroups ? $this->securityGroups->toArray($noStream) : $this->securityGroups;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityGroups'])) {
            $model->securityGroups = securityGroups::fromMap($map['SecurityGroups']);
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
