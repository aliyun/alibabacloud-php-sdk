<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponseBody\analysisJobList\analysisJob\analysisConfig;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponseBody\analysisJobList\analysisJob\analysisConfig\propertiesControl\crop;
use AlibabaCloud\Tea\Model;

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
        'crop'        => 'Crop',
        'deinterlace' => 'Deinterlace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crop) {
            $res['Crop'] = null !== $this->crop ? $this->crop->toMap() : null;
        }
        if (null !== $this->deinterlace) {
            $res['Deinterlace'] = $this->deinterlace;
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
        if (isset($map['Crop'])) {
            $model->crop = crop::fromMap($map['Crop']);
        }
        if (isset($map['Deinterlace'])) {
            $model->deinterlace = $map['Deinterlace'];
        }

        return $model;
    }
}
