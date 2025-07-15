<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddCasterEpisodeGroupRequest;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description The name of the episode.
     *
     * @example episode1
     *
     * @var string
     */
    public $itemName;

    /**
     * @description The URL of the VOD file.
     *
     * If you query the input sources of the production studio by calling the [DescribeCasterVideoResources](https://help.aliyun.com/document_detail/2848023.html) operation, check the value of the response parameter VodUrl to obtain the URL.
     *
     * >  This parameter takes effect only when the input source is a video file that is not from the media library.\\
     * The video file can be in the MP4, FLV, or TS format.
     *
     * @example http://learn.aliyundoc.com/caster/4a82a3d1b7f0462ea37348366201****.flv?auth_key=1608953344-0-0-53f0758162964516ac850f2ddc3f****
     *
     * @var string
     */
    public $vodUrl;
    protected $_name = [
        'itemName' => 'ItemName',
        'vodUrl' => 'VodUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->vodUrl) {
            $res['VodUrl'] = $this->vodUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['VodUrl'])) {
            $model->vodUrl = $map['VodUrl'];
        }

        return $model;
    }
}
