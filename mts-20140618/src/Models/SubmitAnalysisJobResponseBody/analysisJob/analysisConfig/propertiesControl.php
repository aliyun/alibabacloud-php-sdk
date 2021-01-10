<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobResponseBody\analysisJob\analysisConfig;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobResponseBody\analysisJob\analysisConfig\propertiesControl\crop;
use AlibabaCloud\Tea\Model;

class propertiesControl extends Model
{
    /**
     * @var string
     */
    public $deinterlace;

    /**
     * @var crop
     */
    public $crop;
    protected $_name = [
        'deinterlace' => 'Deinterlace',
        'crop'        => 'Crop',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deinterlace) {
            $res['Deinterlace'] = $this->deinterlace;
        }
        if (null !== $this->crop) {
            $res['Crop'] = null !== $this->crop ? $this->crop->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertiesControl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Deinterlace'])) {
            $model->deinterlace = $map['Deinterlace'];
        }
        if (isset($map['Crop'])) {
            $model->crop = crop::fromMap($map['Crop']);
        }

        return $model;
    }
}
