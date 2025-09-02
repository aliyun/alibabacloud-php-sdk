<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRemindsResponseBody\data;

use AlibabaCloud\Dara\Model;

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
    public $remindType;

    /**
     * @var string
     */
    public $remindUnit;

    /**
     * @var bool
     */
    public $useflag;
    protected $_name = [
        'alertMethods' => 'AlertMethods',
        'alertTargets' => 'AlertTargets',
        'alertUnit' => 'AlertUnit',
        'baselineIds' => 'BaselineIds',
        'bizProcessIds' => 'BizProcessIds',
        'dndEnd' => 'DndEnd',
        'dndStart' => 'DndStart',
        'founder' => 'Founder',
        'nodeIds' => 'NodeIds',
        'projectIds' => 'ProjectIds',
        'remindId' => 'RemindId',
        'remindName' => 'RemindName',
        'remindType' => 'RemindType',
        'remindUnit' => 'RemindUnit',
        'useflag' => 'Useflag',
    ];

    public function validate()
    {
        if (\is_array($this->alertMethods)) {
            Model::validateArray($this->alertMethods);
        }
        if (\is_array($this->alertTargets)) {
            Model::validateArray($this->alertTargets);
        }
        if (\is_array($this->baselineIds)) {
            Model::validateArray($this->baselineIds);
        }
        if (\is_array($this->bizProcessIds)) {
            Model::validateArray($this->bizProcessIds);
        }
        if (\is_array($this->nodeIds)) {
            Model::validateArray($this->nodeIds);
        }
        if (\is_array($this->projectIds)) {
            Model::validateArray($this->projectIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertMethods) {
            if (\is_array($this->alertMethods)) {
                $res['AlertMethods'] = [];
                $n1 = 0;
                foreach ($this->alertMethods as $item1) {
                    $res['AlertMethods'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->alertTargets) {
            if (\is_array($this->alertTargets)) {
                $res['AlertTargets'] = [];
                $n1 = 0;
                foreach ($this->alertTargets as $item1) {
                    $res['AlertTargets'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->alertUnit) {
            $res['AlertUnit'] = $this->alertUnit;
        }

        if (null !== $this->baselineIds) {
            if (\is_array($this->baselineIds)) {
                $res['BaselineIds'] = [];
                $n1 = 0;
                foreach ($this->baselineIds as $item1) {
                    $res['BaselineIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bizProcessIds) {
            if (\is_array($this->bizProcessIds)) {
                $res['BizProcessIds'] = [];
                $n1 = 0;
                foreach ($this->bizProcessIds as $item1) {
                    $res['BizProcessIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->nodeIds)) {
                $res['NodeIds'] = [];
                $n1 = 0;
                foreach ($this->nodeIds as $item1) {
                    $res['NodeIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectIds) {
            if (\is_array($this->projectIds)) {
                $res['ProjectIds'] = [];
                $n1 = 0;
                foreach ($this->projectIds as $item1) {
                    $res['ProjectIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertMethods'])) {
            if (!empty($map['AlertMethods'])) {
                $model->alertMethods = [];
                $n1 = 0;
                foreach ($map['AlertMethods'] as $item1) {
                    $model->alertMethods[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AlertTargets'])) {
            if (!empty($map['AlertTargets'])) {
                $model->alertTargets = [];
                $n1 = 0;
                foreach ($map['AlertTargets'] as $item1) {
                    $model->alertTargets[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AlertUnit'])) {
            $model->alertUnit = $map['AlertUnit'];
        }

        if (isset($map['BaselineIds'])) {
            if (!empty($map['BaselineIds'])) {
                $model->baselineIds = [];
                $n1 = 0;
                foreach ($map['BaselineIds'] as $item1) {
                    $model->baselineIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BizProcessIds'])) {
            if (!empty($map['BizProcessIds'])) {
                $model->bizProcessIds = [];
                $n1 = 0;
                foreach ($map['BizProcessIds'] as $item1) {
                    $model->bizProcessIds[$n1] = $item1;
                    ++$n1;
                }
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
                $model->nodeIds = [];
                $n1 = 0;
                foreach ($map['NodeIds'] as $item1) {
                    $model->nodeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectIds'])) {
            if (!empty($map['ProjectIds'])) {
                $model->projectIds = [];
                $n1 = 0;
                foreach ($map['ProjectIds'] as $item1) {
                    $model->projectIds[$n1] = $item1;
                    ++$n1;
                }
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
