<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ListRouteMapAssociationsResponseBody;

use AlibabaCloud\Dara\Model;

class routeMapAssociationList extends Model
{
    /**
     * @var string
     */
    public $associationId;

    /**
     * @var string
     */
    public $direction;

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
    public $gmtModified;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string[]
     */
    public $regionIdList;

    /**
     * @var string
     */
    public $routeMapId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'associationId' => 'AssociationId',
        'direction' => 'Direction',
        'ecrId' => 'EcrId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'priority' => 'Priority',
        'regionIdList' => 'RegionIdList',
        'routeMapId' => 'RouteMapId',
        'status' => 'Status',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->regionIdList)) {
            Model::validateArray($this->regionIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associationId) {
            $res['AssociationId'] = $this->associationId;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->regionIdList) {
            if (\is_array($this->regionIdList)) {
                $res['RegionIdList'] = [];
                $n1 = 0;
                foreach ($this->regionIdList as $item1) {
                    $res['RegionIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->routeMapId) {
            $res['RouteMapId'] = $this->routeMapId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AssociationId'])) {
            $model->associationId = $map['AssociationId'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RegionIdList'])) {
            if (!empty($map['RegionIdList'])) {
                $model->regionIdList = [];
                $n1 = 0;
                foreach ($map['RegionIdList'] as $item1) {
                    $model->regionIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RouteMapId'])) {
            $model->routeMapId = $map['RouteMapId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
