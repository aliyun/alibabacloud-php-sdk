<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\CACS;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\covid;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\lungNodule;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var lungNodule
     */
    public $lungNodule;

    /**
     * @var CACS
     */
    public $CACS;

    /**
     * @var covid
     */
    public $covid;
    protected $_name = [
        'lungNodule' => 'LungNodule',
        'CACS'       => 'CACS',
        'covid'      => 'Covid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lungNodule) {
            $res['LungNodule'] = null !== $this->lungNodule ? $this->lungNodule->toMap() : null;
        }
        if (null !== $this->CACS) {
            $res['CACS'] = null !== $this->CACS ? $this->CACS->toMap() : null;
        }
        if (null !== $this->covid) {
            $res['Covid'] = null !== $this->covid ? $this->covid->toMap() : null;
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
        if (isset($map['LungNodule'])) {
            $model->lungNodule = lungNodule::fromMap($map['LungNodule']);
        }
        if (isset($map['CACS'])) {
            $model->CACS = CACS::fromMap($map['CACS']);
        }
        if (isset($map['Covid'])) {
            $model->covid = covid::fromMap($map['Covid']);
        }

        return $model;
    }
}
