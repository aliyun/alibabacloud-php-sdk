<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class InsertDeployGroupRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $initPackageVersionId;
    protected $_name = [
        'appId' => 'AppId',
        'groupName' => 'GroupName',
        'initPackageVersionId' => 'InitPackageVersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
