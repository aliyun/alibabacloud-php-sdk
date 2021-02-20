<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\DescribeUserTagsResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $assetCount;

    /**
     * @var string
     */
    public $tagKey;
    protected $_name = [
        'assetCount' => 'AssetCount',
        'tagKey'     => 'TagKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetCount) {
            $res['AssetCount'] = $this->assetCount;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetCount'])) {
            $model->assetCount = $map['AssetCount'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }

        return $model;
    }
}
