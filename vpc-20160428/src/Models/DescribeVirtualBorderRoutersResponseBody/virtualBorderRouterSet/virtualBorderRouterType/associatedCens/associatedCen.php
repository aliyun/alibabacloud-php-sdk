<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet\virtualBorderRouterType\associatedCens;

use AlibabaCloud\Tea\Model;

class associatedCen extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-kojok19xxx****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The user ID (UID) of the Alibaba Cloud account to which the CEN instance belongs.
     *
     * @example 1688000000000****
     *
     * @var int
     */
    public $cenOwnerId;

    /**
     * @description The status of the CEN instance. Valid values:
     *
     * - **Attached**: The VBR is attached to the CEN instance.
     * - **Attaching**: The VBR is being attached to the CEN instance.
     * - **Detached**: The VBR is detached from the CEN instance.
     * - **Detaching**: The VBR is being detached from the CEN instance.
     * - If no value is returned, the VBR is not attached to a CEN instance.
     * @example Attached
     *
     * @var string
     */
    public $cenStatus;
    protected $_name = [
        'cenId'      => 'CenId',
        'cenOwnerId' => 'CenOwnerId',
        'cenStatus'  => 'CenStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cenOwnerId) {
            $res['CenOwnerId'] = $this->cenOwnerId;
        }
        if (null !== $this->cenStatus) {
            $res['CenStatus'] = $this->cenStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedCen
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CenOwnerId'])) {
            $model->cenOwnerId = $map['CenOwnerId'];
        }
        if (isset($map['CenStatus'])) {
            $model->cenStatus = $map['CenStatus'];
        }

        return $model;
    }
}
