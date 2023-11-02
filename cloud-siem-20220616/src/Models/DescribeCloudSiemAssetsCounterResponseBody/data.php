<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemAssetsCounterResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $assetNum;

    /**
     * @example domain
     *
     * @var string
     */
    public $assetType;
    protected $_name = [
        'assetNum'  => 'AssetNum',
        'assetType' => 'AssetType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
