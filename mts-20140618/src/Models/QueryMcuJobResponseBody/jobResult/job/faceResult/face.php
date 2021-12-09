<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\faceResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\faceResult\face\celebrities;
use AlibabaCloud\Tea\Model;

class face extends Model
{
    /**
     * @var celebrities
     */
    public $celebrities;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'celebrities' => 'Celebrities',
        'imageId'     => 'ImageId',
        'imageUrl'    => 'ImageUrl',
        'time'        => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->celebrities) {
            $res['Celebrities'] = null !== $this->celebrities ? $this->celebrities->toMap() : null;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Celebrities'])) {
            $model->celebrities = celebrities::fromMap($map['Celebrities']);
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
