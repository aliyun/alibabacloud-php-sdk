<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionSummaryResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionSummaryResponseBody\data\tagSummaryInfo\tagSummaryInfoDetailList;

class tagSummaryInfo extends Model
{
    /**
     * @var tagSummaryInfoDetailList[]
     */
    public $tagSummaryInfoDetailList;
    protected $_name = [
        'tagSummaryInfoDetailList' => 'TagSummaryInfoDetailList',
    ];

    public function validate()
    {
        if (\is_array($this->tagSummaryInfoDetailList)) {
            Model::validateArray($this->tagSummaryInfoDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagSummaryInfoDetailList) {
            if (\is_array($this->tagSummaryInfoDetailList)) {
                $res['TagSummaryInfoDetailList'] = [];
                $n1 = 0;
                foreach ($this->tagSummaryInfoDetailList as $item1) {
                    $res['TagSummaryInfoDetailList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TagSummaryInfoDetailList'])) {
            if (!empty($map['TagSummaryInfoDetailList'])) {
                $model->tagSummaryInfoDetailList = [];
                $n1 = 0;
                foreach ($map['TagSummaryInfoDetailList'] as $item1) {
                    $model->tagSummaryInfoDetailList[$n1++] = tagSummaryInfoDetailList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
