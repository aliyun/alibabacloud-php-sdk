<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRouteEntryListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRouteEntryListResponseBody\routeEntrys\nextHops;

class routeEntrys extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var nextHops[]
     */
    public $nextHops;

    /**
     * @var string
     */
    public $routeEntryId;

    /**
     * @var string
     */
    public $routeEntryName;

    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var string
     */
    public $sourceCidrBlock;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'nextHops' => 'NextHops',
        'routeEntryId' => 'RouteEntryId',
        'routeEntryName' => 'RouteEntryName',
        'routeTableId' => 'RouteTableId',
        'sourceCidrBlock' => 'SourceCidrBlock',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->nextHops)) {
            Model::validateArray($this->nextHops);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }

        if (null !== $this->nextHops) {
            if (\is_array($this->nextHops)) {
                $res['NextHops'] = [];
                $n1 = 0;
                foreach ($this->nextHops as $item1) {
                    $res['NextHops'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->routeEntryId) {
            $res['RouteEntryId'] = $this->routeEntryId;
        }

        if (null !== $this->routeEntryName) {
            $res['RouteEntryName'] = $this->routeEntryName;
        }

        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        if (null !== $this->sourceCidrBlock) {
            $res['SourceCidrBlock'] = $this->sourceCidrBlock;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }

        if (isset($map['NextHops'])) {
            if (!empty($map['NextHops'])) {
                $model->nextHops = [];
                $n1 = 0;
                foreach ($map['NextHops'] as $item1) {
                    $model->nextHops[$n1] = nextHops::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RouteEntryId'])) {
            $model->routeEntryId = $map['RouteEntryId'];
        }

        if (isset($map['RouteEntryName'])) {
            $model->routeEntryName = $map['RouteEntryName'];
        }

        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        if (isset($map['SourceCidrBlock'])) {
            $model->sourceCidrBlock = $map['SourceCidrBlock'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
