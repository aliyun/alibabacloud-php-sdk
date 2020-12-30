<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectMainBodyResponseBody;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectMainBodyResponseBody\data\location;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var location
     */
    public $location;
    protected $_name = [
        'location' => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toMap() : null;
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
        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
        }

        return $model;
    }
}
