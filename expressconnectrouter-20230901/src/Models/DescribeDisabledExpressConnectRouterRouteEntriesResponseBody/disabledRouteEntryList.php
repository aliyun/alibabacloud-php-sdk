<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeDisabledExpressConnectRouterRouteEntriesResponseBody;

use AlibabaCloud\Dara\Model;

class disabledRouteEntryList extends Model
{
    /**
     * @var string
     */
    public $destinationCidrBlock;
    /**
     * @var string
     */
    public $ecrId;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $nexthopInstanceId;
    /**
     * @var string
     */
    public $nexthopInstanceRegionId;
    protected $_name = [
        'destinationCidrBlock'    => 'DestinationCidrBlock',
        'ecrId'                   => 'EcrId',
        'gmtCreate'               => 'GmtCreate',
        'nexthopInstanceId'       => 'NexthopInstanceId',
        'nexthopInstanceRegionId' => 'NexthopInstanceRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }

        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->nexthopInstanceId) {
            $res['NexthopInstanceId'] = $this->nexthopInstanceId;
        }

        if (null !== $this->nexthopInstanceRegionId) {
            $res['NexthopInstanceRegionId'] = $this->nexthopInstanceRegionId;
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
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }

        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['NexthopInstanceId'])) {
            $model->nexthopInstanceId = $map['NexthopInstanceId'];
        }

        if (isset($map['NexthopInstanceRegionId'])) {
            $model->nexthopInstanceRegionId = $map['NexthopInstanceRegionId'];
        }

        return $model;
    }
}
