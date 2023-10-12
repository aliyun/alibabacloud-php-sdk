<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\InspectionScript\inspectionAlarmRules;
use AlibabaCloud\Tea\Model;

class InspectionScript extends Model
{
    /**
     * @var inspectionAlarmRules[]
     */
    public $inspectionAlarmRules;

    /**
     * @var string
     */
    public $inspectionCrontab;

    /**
     * @var string
     */
    public $itemDescription;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $script;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $scriptStatus;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'inspectionAlarmRules' => 'InspectionAlarmRules',
        'inspectionCrontab'    => 'InspectionCrontab',
        'itemDescription'      => 'ItemDescription',
        'itemId'               => 'ItemId',
        'itemName'             => 'ItemName',
        'model'                => 'Model',
        'role'                 => 'Role',
        'script'               => 'Script',
        'scriptId'             => 'ScriptId',
        'scriptStatus'         => 'ScriptStatus',
        'vendor'               => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inspectionAlarmRules) {
            $res['InspectionAlarmRules'] = [];
            if (null !== $this->inspectionAlarmRules && \is_array($this->inspectionAlarmRules)) {
                $n = 0;
                foreach ($this->inspectionAlarmRules as $item) {
                    $res['InspectionAlarmRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->inspectionCrontab) {
            $res['InspectionCrontab'] = $this->inspectionCrontab;
        }
        if (null !== $this->itemDescription) {
            $res['ItemDescription'] = $this->itemDescription;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->scriptStatus) {
            $res['ScriptStatus'] = $this->scriptStatus;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InspectionScript
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InspectionAlarmRules'])) {
            if (!empty($map['InspectionAlarmRules'])) {
                $model->inspectionAlarmRules = [];
                $n                           = 0;
                foreach ($map['InspectionAlarmRules'] as $item) {
                    $model->inspectionAlarmRules[$n++] = null !== $item ? inspectionAlarmRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InspectionCrontab'])) {
            $model->inspectionCrontab = $map['InspectionCrontab'];
        }
        if (isset($map['ItemDescription'])) {
            $model->itemDescription = $map['ItemDescription'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['ScriptStatus'])) {
            $model->scriptStatus = $map['ScriptStatus'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
