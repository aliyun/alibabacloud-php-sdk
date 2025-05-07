<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->handScoreIdList)) {
            Model::validateArray($this->handScoreIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->handScoreIdList) {
            if (\is_array($this->handScoreIdList)) {
                $res['HandScoreIdList'] = [];
                $n1 = 0;
                foreach ($this->handScoreIdList as $item1) {
                    $res['HandScoreIdList'][$n1++] = $item1;
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
        if (isset($map['HandScoreIdList'])) {
            if (!empty($map['HandScoreIdList'])) {
                $model->handScoreIdList = [];
                $n1 = 0;
                foreach ($map['HandScoreIdList'] as $item1) {
                    $model->handScoreIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
