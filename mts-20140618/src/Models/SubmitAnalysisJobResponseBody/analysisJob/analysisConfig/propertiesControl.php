<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobResponseBody\analysisJob\analysisConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobResponseBody\analysisJob\analysisConfig\propertiesControl\crop;

class propertiesControl extends Model
{
    /**
     * @var crop
     */
    public $crop;

    /**
     * @var string
     */
    public $deinterlace;
    protected $_name = [
        'crop' => 'Crop',
        'deinterlace' => 'Deinterlace',
    ];

    public function validate()
    {
        if (null !== $this->crop) {
            $this->crop->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crop) {
            $res['Crop'] = null !== $this->crop ? $this->crop->toArray($noStream) : $this->crop;
        }

        if (null !== $this->deinterlace) {
            $res['Deinterlace'] = $this->deinterlace;
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
        if (isset($map['Crop'])) {
            $model->crop = crop::fromMap($map['Crop']);
        }

        if (isset($map['Deinterlace'])) {
            $model->deinterlace = $map['Deinterlace'];
        }

        return $model;
    }
}
