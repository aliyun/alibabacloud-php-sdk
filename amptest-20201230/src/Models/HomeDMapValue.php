<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AmpTest\V20201230\Models;

use AlibabaCloud\SDK\AmpTest\V20201230\Models\HomeDMapValue\location;
use AlibabaCloud\Tea\Model;

class HomeDMapValue extends Model
{
    /**
     * @var string
     */
    public $detail;

    /**
     * @var location
     */
    public $location;
    protected $_name = [
        'detail'   => 'Detail',
        'location' => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HomeDMapValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
        }

        return $model;
    }
}
