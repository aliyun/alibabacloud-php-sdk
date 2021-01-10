<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\tagResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\tagResult\tag\frameTagInfos;
use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var frameTagInfos
     */
    public $frameTagInfos;

    /**
     * @var string
     */
    public $imageId;
    protected $_name = [
        'time'          => 'Time',
        'imageUrl'      => 'ImageUrl',
        'frameTagInfos' => 'FrameTagInfos',
        'imageId'       => 'ImageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->frameTagInfos) {
            $res['FrameTagInfos'] = null !== $this->frameTagInfos ? $this->frameTagInfos->toMap() : null;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['FrameTagInfos'])) {
            $model->frameTagInfos = frameTagInfos::fromMap($map['FrameTagInfos']);
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        return $model;
    }
}
