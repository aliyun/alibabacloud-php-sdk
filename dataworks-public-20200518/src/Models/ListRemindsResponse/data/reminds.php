<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRemindsResponse\data;

use AlibabaCloud\Tea\Model;

class reminds extends Model
{
    /**
     * @var int
     */
    public $remindId;

    /**
     * @var string
     */
    public $remindName;

    /**
     * @var string
     */
    public $dndStart;

    /**
     * @var string
     */
    public $dndEnd;

    /**
     * @var string
     */
    public $remindUnit;

    /**
     * @var string
     */
    public $remindType;

    /**
     * @var string
     */
    public $alertUnit;

    /**
     * @var bool
     */
    public $useflag;

    /**
     * @var string
     */
    public $founder;

    /**
     * @var int[]
     */
    public $nodeIds;

    /**
     * @var int[]
     */
    public $baselineIds;

    /**
     * @var int[]
     */
    public $projectIds;

    /**
     * @var int[]
     */
    public $bizProcessIds;

    /**
     * @var string[]
     */
    public $alertMethods;

    /**
     * @var string[]
     */
    public $alertTargets;
    protected $_name = [
        'remindId'      => 'RemindId',
        'remindName'    => 'RemindName',
        'dndStart'      => 'DndStart',
        'dndEnd'        => 'DndEnd',
        'remindUnit'    => 'RemindUnit',
        'remindType'    => 'RemindType',
        'alertUnit'     => 'AlertUnit',
        'useflag'       => 'Useflag',
        'founder'       => 'Founder',
        'nodeIds'       => 'NodeIds',
        'baselineIds'   => 'BaselineIds',
        'projectIds'    => 'ProjectIds',
        'bizProcessIds' => 'BizProcessIds',
        'alertMethods'  => 'AlertMethods',
        'alertTargets'  => 'AlertTargets',
    ];

    public function validate()
    {
        Model::validateRequired('remindId', $this->remindId, true);
        Model::validateRequired('remindName', $this->remindName, true);
        Model::validateRequired('dndStart', $this->dndStart, true);
        Model::validateRequired('dndEnd', $this->dndEnd, true);
        Model::validateRequired('remindUnit', $this->remindUnit, true);
        Model::validateRequired('remindType', $this->remindType, true);
        Model::validateRequired('alertUnit', $this->alertUnit, true);
        Model::validateRequired('useflag', $this->useflag, true);
        Model::validateRequired('founder', $this->founder, true);
        Model::validateRequired('nodeIds', $this->nodeIds, true);
        Model::validateRequired('baselineIds', $this->baselineIds, true);
        Model::validateRequired('projectIds', $this->projectIds, true);
        Model::validateRequired('bizProcessIds', $this->bizProcessIds, true);
        Model::validateRequired('alertMethods', $this->alertMethods, true);
        Model::validateRequired('alertTargets', $this->alertTargets, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remindId) {
            $res['RemindId'] = $this->remindId;
        }
        if (null !== $this->remindName) {
            $res['RemindName'] = $this->remindName;
        }
        if (null !== $this->dndStart) {
            $res['DndStart'] = $this->dndStart;
        }
        if (null !== $this->dndEnd) {
            $res['DndEnd'] = $this->dndEnd;
        }
        if (null !== $this->remindUnit) {
            $res['RemindUnit'] = $this->remindUnit;
        }
        if (null !== $this->remindType) {
            $res['RemindType'] = $this->remindType;
        }
        if (null !== $this->alertUnit) {
            $res['AlertUnit'] = $this->alertUnit;
        }
        if (null !== $this->useflag) {
            $res['Useflag'] = $this->useflag;
        }
        if (null !== $this->founder) {
            $res['Founder'] = $this->founder;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->baselineIds) {
            $res['BaselineIds'] = $this->baselineIds;
        }
        if (null !== $this->projectIds) {
            $res['ProjectIds'] = $this->projectIds;
        }
        if (null !== $this->bizProcessIds) {
            $res['BizProcessIds'] = $this->bizProcessIds;
        }
        if (null !== $this->alertMethods) {
            $res['AlertMethods'] = $this->alertMethods;
        }
        if (null !== $this->alertTargets) {
            $res['AlertTargets'] = $this->alertTargets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reminds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemindId'])) {
            $model->remindId = $map['RemindId'];
        }
        if (isset($map['RemindName'])) {
            $model->remindName = $map['RemindName'];
        }
        if (isset($map['DndStart'])) {
            $model->dndStart = $map['DndStart'];
        }
        if (isset($map['DndEnd'])) {
            $model->dndEnd = $map['DndEnd'];
        }
        if (isset($map['RemindUnit'])) {
            $model->remindUnit = $map['RemindUnit'];
        }
        if (isset($map['RemindType'])) {
            $model->remindType = $map['RemindType'];
        }
        if (isset($map['AlertUnit'])) {
            $model->alertUnit = $map['AlertUnit'];
        }
        if (isset($map['Useflag'])) {
            $model->useflag = $map['Useflag'];
        }
        if (isset($map['Founder'])) {
            $model->founder = $map['Founder'];
        }
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
        }
        if (isset($map['BaselineIds'])) {
            if (!empty($map['BaselineIds'])) {
                $model->baselineIds = $map['BaselineIds'];
            }
        }
        if (isset($map['ProjectIds'])) {
            if (!empty($map['ProjectIds'])) {
                $model->projectIds = $map['ProjectIds'];
            }
        }
        if (isset($map['BizProcessIds'])) {
            if (!empty($map['BizProcessIds'])) {
                $model->bizProcessIds = $map['BizProcessIds'];
            }
        }
        if (isset($map['AlertMethods'])) {
            if (!empty($map['AlertMethods'])) {
                $model->alertMethods = $map['AlertMethods'];
            }
        }
        if (isset($map['AlertTargets'])) {
            if (!empty($map['AlertTargets'])) {
                $model->alertTargets = $map['AlertTargets'];
            }
        }

        return $model;
    }
}
