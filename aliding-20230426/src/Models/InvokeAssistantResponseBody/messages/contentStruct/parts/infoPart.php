<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\contentStruct\parts;

use AlibabaCloud\Dara\Model;

class infoPart extends Model
{
    /**
     * @var string[]
     */
    public $cateIdList;

    /**
     * @var bool
     */
    public $needFeedback;

    /**
     * @var string
     */
    public $origin;
    protected $_name = [
        'cateIdList' => 'cateIdList',
        'needFeedback' => 'needFeedback',
        'origin' => 'origin',
    ];

    public function validate()
    {
        if (\is_array($this->cateIdList)) {
            Model::validateArray($this->cateIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cateIdList) {
            if (\is_array($this->cateIdList)) {
                $res['cateIdList'] = [];
                $n1 = 0;
                foreach ($this->cateIdList as $item1) {
                    $res['cateIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->needFeedback) {
            $res['needFeedback'] = $this->needFeedback;
        }

        if (null !== $this->origin) {
            $res['origin'] = $this->origin;
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
        if (isset($map['cateIdList'])) {
            if (!empty($map['cateIdList'])) {
                $model->cateIdList = [];
                $n1 = 0;
                foreach ($map['cateIdList'] as $item1) {
                    $model->cateIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['needFeedback'])) {
            $model->needFeedback = $map['needFeedback'];
        }

        if (isset($map['origin'])) {
            $model->origin = $map['origin'];
        }

        return $model;
    }
}
