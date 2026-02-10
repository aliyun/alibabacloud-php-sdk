<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetCheckCountStatisticRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $statisticType;

    /**
     * @var string[]
     */
    public $taskSources;

    /**
     * @var string[]
     */
    public $vendors;
    protected $_name = [
        'lang' => 'Lang',
        'statisticType' => 'StatisticType',
        'taskSources' => 'TaskSources',
        'vendors' => 'Vendors',
    ];

    public function validate()
    {
        if (\is_array($this->taskSources)) {
            Model::validateArray($this->taskSources);
        }
        if (\is_array($this->vendors)) {
            Model::validateArray($this->vendors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->statisticType) {
            $res['StatisticType'] = $this->statisticType;
        }

        if (null !== $this->taskSources) {
            if (\is_array($this->taskSources)) {
                $res['TaskSources'] = [];
                $n1 = 0;
                foreach ($this->taskSources as $item1) {
                    $res['TaskSources'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vendors) {
            if (\is_array($this->vendors)) {
                $res['Vendors'] = [];
                $n1 = 0;
                foreach ($this->vendors as $item1) {
                    $res['Vendors'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['StatisticType'])) {
            $model->statisticType = $map['StatisticType'];
        }

        if (isset($map['TaskSources'])) {
            if (!empty($map['TaskSources'])) {
                $model->taskSources = [];
                $n1 = 0;
                foreach ($map['TaskSources'] as $item1) {
                    $model->taskSources[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Vendors'])) {
            if (!empty($map['Vendors'])) {
                $model->vendors = [];
                $n1 = 0;
                foreach ($map['Vendors'] as $item1) {
                    $model->vendors[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
