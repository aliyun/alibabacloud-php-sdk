<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AncillarySuggestResponseBody\data;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AncillarySuggestResponseBody\data\segAncillaryMapList\ancillary;
use AlibabaCloud\Tea\Model;

class segAncillaryMapList extends Model
{
    /**
     * @var ancillary
     */
    public $ancillary;

    /**
     * @var string[]
     */
    public $segmentIdList;
    protected $_name = [
        'ancillary'     => 'ancillary',
        'segmentIdList' => 'segment_id_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ancillary) {
            $res['ancillary'] = null !== $this->ancillary ? $this->ancillary->toMap() : null;
        }
        if (null !== $this->segmentIdList) {
            $res['segment_id_list'] = $this->segmentIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return segAncillaryMapList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ancillary'])) {
            $model->ancillary = ancillary::fromMap($map['ancillary']);
        }
        if (isset($map['segment_id_list'])) {
            if (!empty($map['segment_id_list'])) {
                $model->segmentIdList = $map['segment_id_list'];
            }
        }

        return $model;
    }
}
