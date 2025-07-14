<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionSummaryResponseBody\data;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionSummaryResponseBody\data\tagSummaryInfo\tagSummaryInfoDetailList;
use AlibabaCloud\Tea\Model;

class tagSummaryInfo extends Model
{
    /**
     * @var tagSummaryInfoDetailList[]
     */
    public $tagSummaryInfoDetailList;
    protected $_name = [
        'tagSummaryInfoDetailList' => 'TagSummaryInfoDetailList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagSummaryInfoDetailList) {
            $res['TagSummaryInfoDetailList'] = [];
            if (null !== $this->tagSummaryInfoDetailList && \is_array($this->tagSummaryInfoDetailList)) {
                $n = 0;
                foreach ($this->tagSummaryInfoDetailList as $item) {
                    $res['TagSummaryInfoDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagSummaryInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagSummaryInfoDetailList'])) {
            if (!empty($map['TagSummaryInfoDetailList'])) {
                $model->tagSummaryInfoDetailList = [];
                $n = 0;
                foreach ($map['TagSummaryInfoDetailList'] as $item) {
                    $model->tagSummaryInfoDetailList[$n++] = null !== $item ? tagSummaryInfoDetailList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
