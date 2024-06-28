<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\associatedCens;

use AlibabaCloud\Tea\Model;

class associatedCen extends Model
{
    /**
     * @description The ID of the CEN instance to which the VPC is attached.
     *
     * @example cen-7qthudw0ll6jmc****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The ID of the account to which the CEN instance belongs.
     *
     * @example 28311773240248****
     *
     * @var int
     */
    public $cenOwnerId;

    /**
     * @description The status of the CEN instance.
     *
     **Attached** is returned only when the VPC is attached to a CEN instance.
     *
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
