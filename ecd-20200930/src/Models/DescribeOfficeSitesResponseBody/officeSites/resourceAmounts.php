<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponseBody\officeSites;

use AlibabaCloud\Tea\Model;

class resourceAmounts extends Model
{
    /**
     * @description The number of resources.
     *
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description The resource type.
     *
     * Valid values:
     *
     *   desktop: the cloud computer.
     *   DesktopGroup: the cloud computer share.
     *
     * @example desktop
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'amount' => 'amount',
        'resourceType' => 'resourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceAmounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
