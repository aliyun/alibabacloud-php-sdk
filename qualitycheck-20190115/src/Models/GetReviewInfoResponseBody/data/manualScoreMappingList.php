<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetReviewInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class manualScoreMappingList extends Model
{
    /**
     * @var string[]
     */
    public $manualScoreMappingList;
    protected $_name = [
        'manualScoreMappingList' => 'ManualScoreMappingList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->manualScoreMappingList) {
            $res['ManualScoreMappingList'] = $this->manualScoreMappingList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return manualScoreMappingList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ManualScoreMappingList'])) {
            if (!empty($map['ManualScoreMappingList'])) {
                $model->manualScoreMappingList = $map['ManualScoreMappingList'];
            }
        }

        return $model;
    }
}
