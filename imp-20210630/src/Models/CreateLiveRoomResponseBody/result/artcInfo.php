<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveRoomResponseBody\result;

use AlibabaCloud\Tea\Model;

class artcInfo extends Model
{
    /**
     * @var string
     */
    public $artcH5Url;

    /**
     * @var string
     */
    public $artcUrl;
    protected $_name = [
        'artcH5Url' => 'ArtcH5Url',
        'artcUrl'   => 'ArtcUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->artcH5Url) {
            $res['ArtcH5Url'] = $this->artcH5Url;
        }
        if (null !== $this->artcUrl) {
            $res['ArtcUrl'] = $this->artcUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return artcInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtcH5Url'])) {
            $model->artcH5Url = $map['ArtcH5Url'];
        }
        if (isset($map['ArtcUrl'])) {
            $model->artcUrl = $map['ArtcUrl'];
        }

        return $model;
    }
}
