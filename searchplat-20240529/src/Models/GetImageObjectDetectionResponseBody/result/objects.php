<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetImageObjectDetectionResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetImageObjectDetectionResponseBody\result\objects\location;

class objects extends Model
{
    /**
     * @var string
     */
    public $confidence;

    /**
     * @var location
     */
    public $location;
    protected $_name = [
        'confidence' => 'confidence',
        'location' => 'location',
    ];

    public function validate()
    {
        if (null !== $this->location) {
            $this->location->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['confidence'] = $this->confidence;
        }

        if (null !== $this->location) {
            $res['location'] = null !== $this->location ? $this->location->toArray($noStream) : $this->location;
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
        if (isset($map['confidence'])) {
            $model->confidence = $map['confidence'];
        }

        if (isset($map['location'])) {
            $model->location = location::fromMap($map['location']);
        }

        return $model;
    }
}
