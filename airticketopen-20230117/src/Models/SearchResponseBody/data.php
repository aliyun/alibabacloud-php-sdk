<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchResponseBody;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchResponseBody\data\solutionList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->solutionList) {
            $res['solution_list'] = [];
            if (null !== $this->solutionList && \is_array($this->solutionList)) {
                $n = 0;
                foreach ($this->solutionList as $item) {
                    $res['solution_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['solution_list'])) {
            if (!empty($map['solution_list'])) {
                $model->solutionList = [];
                $n                   = 0;
                foreach ($map['solution_list'] as $item) {
                    $model->solutionList[$n++] = null !== $item ? solutionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
