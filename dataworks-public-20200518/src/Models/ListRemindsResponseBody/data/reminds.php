<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRemindsResponseBody\data;

use AlibabaCloud\Tea\Model;

class reminds extends Model
{
    /**
     * @var string
     */
    public $founder;

    /**
     * @var int
     */
    public $remindId;

    /**
     * @var string
     */
    public $alertUnit;

    /**
     * @var string
     */
    public $remindType;

    /**
     * @var string
     */
    public $dndEnd;

    /**
     * @var string
     */
    public $dndStart;

    /**
     * @var string
     */
    public $remindUnit;

    /**
     * @var bool
     */
    public $useflag;

    /**
     * @var string
     */
    public $remindName;

    /**
     * @var string[]
     */
    public $alertTargets;

    /**
     * @var int[]
     */
    public $nodeIds;

    /**
     * @var int[]
     */
    public $bizProcessIds;

    /**
     * @var int[]
     */
    public $projectIds;

    /**
     * @var int[]
     */
    public $baselineIds;

    /**
     * @var string[]
     */
    public $alertMethods;
    protected $_name = [
        'founder'       => 'Founder',
        'remindId'      => 'RemindId',
        'alertUnit'     => 'AlertUnit',
        'remindType'    => 'RemindType',
        'dndEnd'        => 'DndEnd',
        'dndStart'      => 'DndStart',
        'remindUnit'    => 'RemindUnit',
        'useflag'       => 'Useflag',
        'remindName'    => 'RemindName',
        'alertTargets'  => 'AlertTargets',
        'nodeIds'       => 'NodeIds',
        'bizProcessIds' => 'BizProcessIds',
        'projectIds'    => 'ProjectIds',
        'baselineIds'   => 'BaselineIds',
        'alertMethods'  => 'AlertMethods',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->founder) {
            $res['Founder'] = $this->founder;
        }
        if (null !== $this->remindId) {
            $res['RemindId'] = $this->remindId;
        }
        if (null !== $this->alertUnit) {
            $res['AlertUnit'] = $this->alertUnit;
        }
        if (null !== $this->remindType) {
            $res['RemindType'] = $this->remindType;
        }
        if (null !== $this->dndEnd) {
            $res['DndEnd'] = $this->dndEnd;
        }
        if (null !== $this->dndStart) {
            $res['DndStart'] = $this->dndStart;
        }
        if (null !== $this->remindUnit) {
            $res['RemindUnit'] = $this->remindUnit;
        }
        if (null !== $this->useflag) {
            $res['Useflag'] = $this->useflag;
        }
        if (null !== $this->remindName) {
            $res['RemindName'] = $this->remindName;
        }
        if (null !== $this->alertTargets) {
            $res['AlertTargets'] = $this->alertTargets;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->bizProcessIds) {
            $res['BizProcessIds'] = $this->bizProcessIds;
        }
        if (null !== $this->projectIds) {
            $res['ProjectIds'] = $this->projectIds;
        }
        if (null !== $this->baselineIds) {
            $res['BaselineIds'] = $this->baselineIds;
        }
        if (null !== $this->alertMethods) {
            $res['AlertMethods'] = $this->alertMethods;
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
        if (isset($map['Founder'])) {
            $model->founder = $map['Founder'];
        }
        if (isset($map['RemindId'])) {
            $model->remindId = $map['RemindId'];
        }
        if (isset($map['AlertUnit'])) {
            $model->alertUnit = $map['AlertUnit'];
        }
        if (isset($map['RemindType'])) {
            $model->remindType = $map['RemindType'];
        }
        if (isset($map['DndEnd'])) {
            $model->dndEnd = $map['DndEnd'];
        }
        if (isset($map['DndStart'])) {
            $model->dndStart = $map['DndStart'];
        }
        if (isset($map['RemindUnit'])) {
            $model->remindUnit = $map['RemindUnit'];
        }
        if (isset($map['Useflag'])) {
            $model->useflag = $map['Useflag'];
        }
        if (isset($map['RemindName'])) {
            $model->remindName = $map['RemindName'];
        }
        if (isset($map['AlertTargets'])) {
            if (!empty($map['AlertTargets'])) {
                $model->alertTargets = $map['AlertTargets'];
            }
        }
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
        }
        if (isset($map['BizProcessIds'])) {
            if (!empty($map['BizProcessIds'])) {
                $model->bizProcessIds = $map['BizProcessIds'];
            }
        }
        if (isset($map['ProjectIds'])) {
            if (!empty($map['ProjectIds'])) {
                $model->projectIds = $map['ProjectIds'];
            }
        }
        if (isset($map['BaselineIds'])) {
            if (!empty($map['BaselineIds'])) {
                $model->baselineIds = $map['BaselineIds'];
            }
        }
        if (isset($map['AlertMethods'])) {
            if (!empty($map['AlertMethods'])) {
                $model->alertMethods = $map['AlertMethods'];
            }
        }

        return $model;
    }
}
