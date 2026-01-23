<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitQualityWatchTasksResponseBody;

use AlibabaCloud\Dara\Model;

class submitResult extends Model
{
    /**
     * @var int[]
     */
    public $watchTaskIdList;
    protected $_name = [
        'watchTaskIdList' => 'WatchTaskIdList',
    ];

    public function validate()
    {
        if (\is_array($this->watchTaskIdList)) {
            Model::validateArray($this->watchTaskIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->watchTaskIdList) {
            if (\is_array($this->watchTaskIdList)) {
                $res['WatchTaskIdList'] = [];
                $n1 = 0;
                foreach ($this->watchTaskIdList as $item1) {
                    $res['WatchTaskIdList'][$n1] = $item1;
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
        if (isset($map['WatchTaskIdList'])) {
            if (!empty($map['WatchTaskIdList'])) {
                $model->watchTaskIdList = [];
                $n1 = 0;
                foreach ($map['WatchTaskIdList'] as $item1) {
                    $model->watchTaskIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
