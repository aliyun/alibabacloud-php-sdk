<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRemindsResponseBody\data;

use AlibabaCloud\Tea\Model;

class reminds extends Model
{
    /**
     * @var string[]
     */
    public $alertMethods;

    /**
     * @var string[]
     */
    public $alertTargets;

    /**
     * @example OWNER
     *
     * @var string
     */
    public $alertUnit;

    /**
     * @var int[]
     */
    public $baselineIds;

    /**
     * @var int[]
     */
    public $bizProcessIds;

    /**
     * @example 08:00
     *
     * @var string
     */
    public $dndEnd;

    /**
     * @example 00:00
     *
     * @var string
     */
    public $dndStart;

    /**
     * @example 952795****
     *
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
    public $projectIds;

    /**
     * @example 1234
     *
     * @var int
     */
    public $remindId;

    /**
     * @var string
     */
    public $remindName;

    /**
     * @example FINISHED
     *
     * @var string
     */
    public $remindType;

    /**
     * @example NODE
     *
     * @var string
     */
    public $remindUnit;

    /**
     * @example true
     *
     * @var bool
     */
    public $useflag;
    protected $_name = [
        'alertMethods'  => 'AlertMethods',
        'alertTargets'  => 'AlertTargets',
        'alertUnit'     => 'AlertUnit',
        'baselineIds'   => 'BaselineIds',
        'bizProcessIds' => 'BizProcessIds',
        'dndEnd'        => 'DndEnd',
        'dndStart'      => 'DndStart',
        'founder'       => 'Founder',
        'nodeIds'       => 'NodeIds',
        'projectIds'    => 'ProjectIds',
        'remindId'      => 'RemindId',
        'remindName'    => 'RemindName',
        'remindType'    => 'RemindType',
        'remindUnit'    => 'RemindUnit',
        'useflag'       => 'Useflag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertMethods) {
            $res['AlertMethods'] = $this->alertMethods;
        }
        if (null !== $this->alertTargets) {
            $res['AlertTargets'] = $this->alertTargets;
        }
        if (null !== $this->alertUnit) {
            $res['AlertUnit'] = $this->alertUnit;
        }
        if (null !== $this->baselineIds) {
            $res['BaselineIds'] = $this->baselineIds;
        }
        if (null !== $this->bizProcessIds) {
            $res['BizProcessIds'] = $this->bizProcessIds;
        }
        if (null !== $this->dndEnd) {
            $res['DndEnd'] = $this->dndEnd;
        }
        if (null !== $this->dndStart) {
            $res['DndStart'] = $this->dndStart;
        }
        if (null !== $this->founder) {
            $res['Founder'] = $this->founder;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->projectIds) {
            $res['ProjectIds'] = $this->projectIds;
        }
        if (null !== $this->remindId) {
            $res['RemindId'] = $this->remindId;
        }
        if (null !== $this->remindName) {
            $res['RemindName'] = $this->remindName;
        }
        if (null !== $this->remindType) {
            $res['RemindType'] = $this->remindType;
        }
        if (null !== $this->remindUnit) {
            $res['RemindUnit'] = $this->remindUnit;
        }
        if (null !== $this->useflag) {
            $res['Useflag'] = $this->useflag;
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
        if (isset($map['AlertUnit'])) {
            $model->alertUnit = $map['AlertUnit'];
        }
        if (isset($map['BaselineIds'])) {
            if (!empty($map['BaselineIds'])) {
                $model->baselineIds = $map['BaselineIds'];
            }
        }
        if (isset($map['BizProcessIds'])) {
            if (!empty($map['BizProcessIds'])) {
                $model->bizProcessIds = $map['BizProcessIds'];
            }
        }
        if (isset($map['DndEnd'])) {
            $model->dndEnd = $map['DndEnd'];
        }
        if (isset($map['DndStart'])) {
            $model->dndStart = $map['DndStart'];
        }
        if (isset($map['Founder'])) {
            $model->founder = $map['Founder'];
        }
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
        }
        if (isset($map['ProjectIds'])) {
            if (!empty($map['ProjectIds'])) {
                $model->projectIds = $map['ProjectIds'];
            }
        }
        if (isset($map['RemindId'])) {
            $model->remindId = $map['RemindId'];
        }
        if (isset($map['RemindName'])) {
            $model->remindName = $map['RemindName'];
        }
        if (isset($map['RemindType'])) {
            $model->remindType = $map['RemindType'];
        }
        if (isset($map['RemindUnit'])) {
            $model->remindUnit = $map['RemindUnit'];
        }
        if (isset($map['Useflag'])) {
            $model->useflag = $map['Useflag'];
        }

        return $model;
    }
}
