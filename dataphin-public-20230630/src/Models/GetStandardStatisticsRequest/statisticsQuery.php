<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardStatisticsRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardStatisticsRequest\statisticsQuery\createTimePeriod;

class statisticsQuery extends Model
{
    /**
     * @var createTimePeriod
     */
    public $createTimePeriod;

    /**
     * @var string
     */
    public $directory;

    /**
     * @var string[]
     */
    public $standardStageList;
    protected $_name = [
        'createTimePeriod' => 'CreateTimePeriod',
        'directory' => 'Directory',
        'standardStageList' => 'StandardStageList',
    ];

    public function validate()
    {
        if (null !== $this->createTimePeriod) {
            $this->createTimePeriod->validate();
        }
        if (\is_array($this->standardStageList)) {
            Model::validateArray($this->standardStageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimePeriod) {
            $res['CreateTimePeriod'] = null !== $this->createTimePeriod ? $this->createTimePeriod->toArray($noStream) : $this->createTimePeriod;
        }

        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }

        if (null !== $this->standardStageList) {
            if (\is_array($this->standardStageList)) {
                $res['StandardStageList'] = [];
                $n1 = 0;
                foreach ($this->standardStageList as $item1) {
                    $res['StandardStageList'][$n1] = $item1;
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
        if (isset($map['CreateTimePeriod'])) {
            $model->createTimePeriod = createTimePeriod::fromMap($map['CreateTimePeriod']);
        }

        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }

        if (isset($map['StandardStageList'])) {
            if (!empty($map['StandardStageList'])) {
                $model->standardStageList = [];
                $n1 = 0;
                foreach ($map['StandardStageList'] as $item1) {
                    $model->standardStageList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
