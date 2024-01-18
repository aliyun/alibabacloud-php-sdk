<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AncillarySuggestResponseBody;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AncillarySuggestResponseBody\data\segAncillaryMapList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var segAncillaryMapList[]
     */
    public $segAncillaryMapList;

    /**
     * @example eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ
     *
     * @var string
     */
    public $solutionId;
    protected $_name = [
        'segAncillaryMapList' => 'seg_ancillary_map_list',
        'solutionId'          => 'solution_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->segAncillaryMapList) {
            $res['seg_ancillary_map_list'] = [];
            if (null !== $this->segAncillaryMapList && \is_array($this->segAncillaryMapList)) {
                $n = 0;
                foreach ($this->segAncillaryMapList as $item) {
                    $res['seg_ancillary_map_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->solutionId) {
            $res['solution_id'] = $this->solutionId;
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
        if (isset($map['seg_ancillary_map_list'])) {
            if (!empty($map['seg_ancillary_map_list'])) {
                $model->segAncillaryMapList = [];
                $n                          = 0;
                foreach ($map['seg_ancillary_map_list'] as $item) {
                    $model->segAncillaryMapList[$n++] = null !== $item ? segAncillaryMapList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['solution_id'])) {
            $model->solutionId = $map['solution_id'];
        }

        return $model;
    }
}
