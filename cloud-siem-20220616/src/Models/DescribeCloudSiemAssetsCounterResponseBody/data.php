<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemAssetsCounterResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $assetNum;

    /**
     * @var string
     */
    public $assetType;
    protected $_name = [
        'assetNum' => 'AssetNum',
        'assetType' => 'AssetType',
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

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
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

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        return $model;
    }
}
