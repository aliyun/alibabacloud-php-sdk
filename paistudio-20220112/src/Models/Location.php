<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class Location extends Model
{
    /**
     * @var string
     */
    public $locationType;

    /**
     * @var mixed[]
     */
    public $locationValue;
    protected $_name = [
        'locationType'  => 'LocationType',
        'locationValue' => 'LocationValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locationType) {
            $res['LocationType'] = $this->locationType;
        }
        if (null !== $this->locationValue) {
            $res['LocationValue'] = $this->locationValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Location
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocationType'])) {
            $model->locationType = $map['LocationType'];
        }
        if (isset($map['LocationValue'])) {
            $model->locationValue = $map['LocationValue'];
        }

        return $model;
    }
}
