<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListSecurityGroupsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $securityGroups;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'securityGroups' => 'SecurityGroups',
        'totalCount'     => 'TotalCount',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroups) {
            $res['SecurityGroups'] = $this->securityGroups;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSecurityGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroups'])) {
            if (!empty($map['SecurityGroups'])) {
                $model->securityGroups = $map['SecurityGroups'];
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
