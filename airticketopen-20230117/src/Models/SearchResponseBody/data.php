<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchResponseBody\data\solutionList;

class data extends Model
{
    /**
     * @var solutionList[]
     */
    public $solutionList;
    protected $_name = [
        'solutionList' => 'solution_list',
    ];

    public function validate()
    {
        if (\is_array($this->solutionList)) {
            Model::validateArray($this->solutionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->solutionList) {
            if (\is_array($this->solutionList)) {
                $res['solution_list'] = [];
                $n1 = 0;
                foreach ($this->solutionList as $item1) {
                    $res['solution_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['solution_list'])) {
            if (!empty($map['solution_list'])) {
                $model->solutionList = [];
                $n1 = 0;
                foreach ($map['solution_list'] as $item1) {
                    $model->solutionList[$n1] = solutionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
