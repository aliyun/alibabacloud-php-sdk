<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponseBody\snapshotJobList\snapshotJob\snapshotConfig;

use AlibabaCloud\Dara\Model;

class timeArray extends Model
{
    /**
     * @var int[]
     */
    public $timePointList;
    protected $_name = [
        'timePointList' => 'TimePointList',
    ];

    public function validate()
    {
        if (\is_array($this->timePointList)) {
            Model::validateArray($this->timePointList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->timePointList) {
            if (\is_array($this->timePointList)) {
                $res['TimePointList'] = [];
                $n1 = 0;
                foreach ($this->timePointList as $item1) {
                    $res['TimePointList'][$n1] = $item1;
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
        if (isset($map['TimePointList'])) {
            if (!empty($map['TimePointList'])) {
                $model->timePointList = [];
                $n1 = 0;
                foreach ($map['TimePointList'] as $item1) {
                    $model->timePointList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
