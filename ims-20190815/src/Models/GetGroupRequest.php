<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetGroupRequest extends Model
{
    /**
     * @var string
     */
    public $groupPrincipalName;

    /**
     * @var string
     */
    public $akProxySuffix;

    /**
     * @var string
     */
    public $groupName;
    protected $_name = [
        'groupPrincipalName' => 'GroupPrincipalName',
        'akProxySuffix'      => 'AkProxySuffix',
        'groupName'          => 'GroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupPrincipalName) {
            $res['GroupPrincipalName'] = $this->groupPrincipalName;
        }
        if (null !== $this->akProxySuffix) {
            $res['AkProxySuffix'] = $this->akProxySuffix;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupPrincipalName'])) {
            $model->groupPrincipalName = $map['GroupPrincipalName'];
        }
        if (isset($map['AkProxySuffix'])) {
            $model->akProxySuffix = $map['AkProxySuffix'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
