<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\CACS;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\covid;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectRibFracture;
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

    /**
     * @var detectRibFracture
     */
    public $detectRibFracture;

    /**
     * @var string
     */
    public $errorMessage;
    protected $_name = [
        'lungNodule'        => 'LungNodule',
        'CACS'              => 'CACS',
        'covid'             => 'Covid',
        'detectRibFracture' => 'DetectRibFracture',
        'errorMessage'      => 'ErrorMessage',
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
        if (null !== $this->detectRibFracture) {
            $res['DetectRibFracture'] = null !== $this->detectRibFracture ? $this->detectRibFracture->toMap() : null;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
        if (isset($map['DetectRibFracture'])) {
            $model->detectRibFracture = detectRibFracture::fromMap($map['DetectRibFracture']);
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        return $model;
    }
}
