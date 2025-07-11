<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceOwnerUidResponseBody;

use AlibabaCloud\Tea\Model;

class ownerInfos extends Model
{
    /**
     * @example 125************21
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @example a.com-waf
     *
     * @var string
     */
    public $resourceName;
    protected $_name = [
        'ownerUserId' => 'OwnerUserId',
        'resourceName' => 'ResourceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ownerInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        return $model;
    }
}
