<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertDeployGroupRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 3616cdca-4f92-4413-***********
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the instance group. The name can be up to 64 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The version of the initial deployment package associated with the instance group. You can call the ListHistoryDeployVersion operation to query the version. For more information, see [ListHistoryDeployVersion](~~149392~~).
     *
     * @example 441beb18-da42-44dc-****-****
     *
     * @var string
     */
    public $initPackageVersionId;
    protected $_name = [
        'appId'                => 'AppId',
        'groupName'            => 'GroupName',
        'initPackageVersionId' => 'InitPackageVersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->initPackageVersionId) {
            $res['InitPackageVersionId'] = $this->initPackageVersionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertDeployGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InitPackageVersionId'])) {
            $model->initPackageVersionId = $map['InitPackageVersionId'];
        }

        return $model;
    }
}
