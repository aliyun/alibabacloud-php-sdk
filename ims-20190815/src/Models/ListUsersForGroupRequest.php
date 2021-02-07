<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class ListUsersForGroupRequest extends Model
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

    /**
     * @var string
     */
    public $marker;

    /**
     * @var int
     */
    public $maxItems;
    protected $_name = [
        'groupPrincipalName' => 'GroupPrincipalName',
        'akProxySuffix'      => 'AkProxySuffix',
        'groupName'          => 'GroupName',
        'marker'             => 'Marker',
        'maxItems'           => 'MaxItems',
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
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->maxItems) {
            $res['MaxItems'] = $this->maxItems;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUsersForGroupRequest
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
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['MaxItems'])) {
            $model->maxItems = $map['MaxItems'];
        }

        return $model;
    }
}
