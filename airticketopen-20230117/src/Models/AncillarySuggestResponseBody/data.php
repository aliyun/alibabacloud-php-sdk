<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AncillarySuggestResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AncillarySuggestResponseBody\data\segAncillaryMapList;

class data extends Model
{
    /**
     * @var segAncillaryMapList[]
     */
    public $segAncillaryMapList;

    /**
     * @var string
     */
    public $solutionId;
    protected $_name = [
        'segAncillaryMapList' => 'seg_ancillary_map_list',
        'solutionId' => 'solution_id',
    ];

    public function validate()
    {
        if (\is_array($this->segAncillaryMapList)) {
            Model::validateArray($this->segAncillaryMapList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->segAncillaryMapList) {
            if (\is_array($this->segAncillaryMapList)) {
                $res['seg_ancillary_map_list'] = [];
                $n1 = 0;
                foreach ($this->segAncillaryMapList as $item1) {
                    $res['seg_ancillary_map_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->solutionId) {
            $res['solution_id'] = $this->solutionId;
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
        if (isset($map['seg_ancillary_map_list'])) {
            if (!empty($map['seg_ancillary_map_list'])) {
                $model->segAncillaryMapList = [];
                $n1 = 0;
                foreach ($map['seg_ancillary_map_list'] as $item1) {
                    $model->segAncillaryMapList[$n1] = segAncillaryMapList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['solution_id'])) {
            $model->solutionId = $map['solution_id'];
        }

        return $model;
    }
}
