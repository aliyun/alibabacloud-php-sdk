<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody\instanceModel;

use AlibabaCloud\Tea\Model;

class appManagePolicy extends Model
{
    /**
     * @var string
     */
    public $appManagePolicyId;

    /**
     * @var string
     */
    public $appManagePolicyName;
    protected $_name = [
        'appManagePolicyId' => 'AppManagePolicyId',
        'appManagePolicyName' => 'AppManagePolicyName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appManagePolicyId) {
            $res['AppManagePolicyId'] = $this->appManagePolicyId;
        }
        if (null !== $this->appManagePolicyName) {
            $res['AppManagePolicyName'] = $this->appManagePolicyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appManagePolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppManagePolicyId'])) {
            $model->appManagePolicyId = $map['AppManagePolicyId'];
        }
        if (isset($map['AppManagePolicyName'])) {
            $model->appManagePolicyName = $map['AppManagePolicyName'];
        }

        return $model;
    }
}
