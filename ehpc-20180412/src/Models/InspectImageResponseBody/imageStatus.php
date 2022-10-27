<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\InspectImageResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\InspectImageResponseBody\imageStatus\imageInspectInfo;
use AlibabaCloud\Tea\Model;

class imageStatus extends Model
{
    /**
     * @var imageInspectInfo
     */
    public $imageInspectInfo;
    protected $_name = [
        'imageInspectInfo' => 'ImageInspectInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageInspectInfo) {
            $res['ImageInspectInfo'] = null !== $this->imageInspectInfo ? $this->imageInspectInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageInspectInfo'])) {
            $model->imageInspectInfo = imageInspectInfo::fromMap($map['ImageInspectInfo']);
        }

        return $model;
    }
}
