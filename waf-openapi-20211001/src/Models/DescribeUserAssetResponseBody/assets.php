<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserAssetResponseBody;

use AlibabaCloud\Dara\Model;

class assets extends Model
{
    /**
     * @var int
     */
    public $assetNum;
    /**
     * @var int
     */
    public $timeStamp;
    protected $_name = [
        'assetNum'  => 'AssetNum',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetNum) {
            $res['AssetNum'] = $this->assetNum;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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
        if (isset($map['AssetNum'])) {
            $model->assetNum = $map['AssetNum'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
