<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class OperateVulsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var int
     */
    public $precondition;

    /**
     * @var string[]
     */
    public $vulName;

    /**
     * @var string[]
     */
    public $desktopId;
    protected $_name = [
        'regionId'     => 'RegionId',
        'type'         => 'Type',
        'operateType'  => 'OperateType',
        'reason'       => 'Reason',
        'precondition' => 'Precondition',
        'vulName'      => 'VulName',
        'desktopId'    => 'DesktopId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->precondition) {
            $res['Precondition'] = $this->precondition;
        }
        if (null !== $this->vulName) {
            $res['VulName'] = $this->vulName;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Precondition'])) {
            $model->precondition = $map['Precondition'];
        }
        if (isset($map['VulName'])) {
            if (!empty($map['VulName'])) {
                $model->vulName = $map['VulName'];
            }
        }
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
        }

        return $model;
    }
}
