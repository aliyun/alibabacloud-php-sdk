<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\TraceSiteRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\TraceSiteRequest\context\geoLocation;

class context extends Model
{
    /**
     * @var geoLocation
     */
    public $geoLocation;

    /**
     * @var bool
     */
    public $skipChallenge;
    protected $_name = [
        'geoLocation' => 'GeoLocation',
        'skipChallenge' => 'SkipChallenge',
    ];

    public function validate()
    {
        if (null !== $this->geoLocation) {
            $this->geoLocation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->geoLocation) {
            $res['GeoLocation'] = null !== $this->geoLocation ? $this->geoLocation->toArray($noStream) : $this->geoLocation;
        }

        if (null !== $this->skipChallenge) {
            $res['SkipChallenge'] = $this->skipChallenge;
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
        if (isset($map['GeoLocation'])) {
            $model->geoLocation = geoLocation::fromMap($map['GeoLocation']);
        }

        if (isset($map['SkipChallenge'])) {
            $model->skipChallenge = $map['SkipChallenge'];
        }

        return $model;
    }
}
