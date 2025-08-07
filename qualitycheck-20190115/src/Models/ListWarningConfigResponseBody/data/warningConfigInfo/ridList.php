<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponseBody\data\warningConfigInfo;

use AlibabaCloud\Dara\Model;

class ridList extends Model
{
    /**
     * @var string[]
     */
    public $ridList;
    protected $_name = [
        'ridList' => 'RidList',
    ];

    public function validate()
    {
        if (\is_array($this->ridList)) {
            Model::validateArray($this->ridList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ridList) {
            if (\is_array($this->ridList)) {
                $res['RidList'] = [];
                $n1 = 0;
                foreach ($this->ridList as $item1) {
                    $res['RidList'][$n1] = $item1;
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
        if (isset($map['RidList'])) {
            if (!empty($map['RidList'])) {
                $model->ridList = [];
                $n1 = 0;
                foreach ($map['RidList'] as $item1) {
                    $model->ridList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
