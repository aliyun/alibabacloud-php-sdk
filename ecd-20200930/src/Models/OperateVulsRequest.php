<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class OperateVulsRequest extends Model
{
    /**
     * @var string[]
     */
    public $desktopId;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var int
     */
    public $precondition;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $vulName;
    protected $_name = [
        'desktopId'    => 'DesktopId',
        'operateType'  => 'OperateType',
        'precondition' => 'Precondition',
        'reason'       => 'Reason',
        'regionId'     => 'RegionId',
        'type'         => 'Type',
        'vulName'      => 'VulName',
    ];

    public function validate()
    {
        Model::validateRequired('desktopId', $this->desktopId, true);
        Model::validateRequired('operateType', $this->operateType, true);
        Model::validateRequired('precondition', $this->precondition, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('vulName', $this->vulName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->precondition) {
            $res['Precondition'] = $this->precondition;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vulName) {
            $res['VulName'] = $this->vulName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateVulsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['Precondition'])) {
            $model->precondition = $map['Precondition'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VulName'])) {
            if (!empty($map['VulName'])) {
                $model->vulName = $map['VulName'];
            }
        }

        return $model;
    }
}
