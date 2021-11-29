<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeEmrMainVersionResponseBody\emrMainVersion\clusterTypeWhiteUserList;

use AlibabaCloud\Tea\Model;

class clusterTypeWhiteUser extends Model
{
    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'clusterType' => 'ClusterType',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterTypeWhiteUser
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
