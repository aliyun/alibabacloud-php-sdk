<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGrantRulesToCenResponseBody\cenGrantRules;

use AlibabaCloud\Tea\Model;

class cbnGrantRule extends Model
{
    /**
     * @description The UID of the Alibaba Cloud account to which the authorized CEN instance belongs.
     *
     * @example cen-9gsm1q2yh1prpt****
     *
     * @var string
     */
    public $cenInstanceId;

    /**
     * @description The time when the instance was created.
     *
     * @example 132193271328****
     *
     * @var int
     */
    public $cenOwnerId;

    /**
     * @example 2019-11-15T09:26:36Z
     *
     * @var string
     */
    public $creationTime;
    protected $_name = [
        'cenInstanceId' => 'CenInstanceId',
        'cenOwnerId'    => 'CenOwnerId',
        'creationTime'  => 'CreationTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenInstanceId) {
            $res['CenInstanceId'] = $this->cenInstanceId;
        }
        if (null !== $this->cenOwnerId) {
            $res['CenOwnerId'] = $this->cenOwnerId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cbnGrantRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenInstanceId'])) {
            $model->cenInstanceId = $map['CenInstanceId'];
        }
        if (isset($map['CenOwnerId'])) {
            $model->cenOwnerId = $map['CenOwnerId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        return $model;
    }
}
