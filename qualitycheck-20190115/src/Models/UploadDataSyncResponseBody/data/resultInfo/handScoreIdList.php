<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo;

use AlibabaCloud\Tea\Model;

class handScoreIdList extends Model
{
    /**
     * @var string[]
     */
    public $handScoreIdList;
    protected $_name = [
        'handScoreIdList' => 'HandScoreIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->handScoreIdList) {
            $res['HandScoreIdList'] = $this->handScoreIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return handScoreIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HandScoreIdList'])) {
            if (!empty($map['HandScoreIdList'])) {
                $model->handScoreIdList = $map['HandScoreIdList'];
            }
        }

        return $model;
    }
}
