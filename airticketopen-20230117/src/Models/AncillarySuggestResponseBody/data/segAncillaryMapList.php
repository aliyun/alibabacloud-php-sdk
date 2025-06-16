<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AncillarySuggestResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AncillarySuggestResponseBody\data\segAncillaryMapList\ancillary;

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
        'ancillary' => 'ancillary',
        'segmentIdList' => 'segment_id_list',
    ];

    public function validate()
    {
        if (null !== $this->ancillary) {
            $this->ancillary->validate();
        }
        if (\is_array($this->segmentIdList)) {
            Model::validateArray($this->segmentIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ancillary) {
            $res['ancillary'] = null !== $this->ancillary ? $this->ancillary->toArray($noStream) : $this->ancillary;
        }

        if (null !== $this->segmentIdList) {
            if (\is_array($this->segmentIdList)) {
                $res['segment_id_list'] = [];
                $n1 = 0;
                foreach ($this->segmentIdList as $item1) {
                    $res['segment_id_list'][$n1] = $item1;
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
        if (isset($map['ancillary'])) {
            $model->ancillary = ancillary::fromMap($map['ancillary']);
        }

        if (isset($map['segment_id_list'])) {
            if (!empty($map['segment_id_list'])) {
                $model->segmentIdList = [];
                $n1 = 0;
                foreach ($map['segment_id_list'] as $item1) {
                    $model->segmentIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
