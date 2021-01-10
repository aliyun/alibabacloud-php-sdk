<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\faceResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\faceResult\face\celebrities;
use AlibabaCloud\Tea\Model;

class face extends Model
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
     * @var celebrities
     */
    public $celebrities;

    /**
     * @var string
     */
    public $imageId;
    protected $_name = [
        'time'        => 'Time',
        'imageUrl'    => 'ImageUrl',
        'celebrities' => 'Celebrities',
        'imageId'     => 'ImageId',
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
        if (null !== $this->celebrities) {
            $res['Celebrities'] = null !== $this->celebrities ? $this->celebrities->toMap() : null;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return face
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
        if (isset($map['Celebrities'])) {
            $model->celebrities = celebrities::fromMap($map['Celebrities']);
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        return $model;
    }
}
