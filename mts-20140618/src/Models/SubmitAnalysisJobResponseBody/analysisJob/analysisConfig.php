<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobResponseBody\analysisJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobResponseBody\analysisJob\analysisConfig\propertiesControl;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobResponseBody\analysisJob\analysisConfig\qualityControl;
use AlibabaCloud\Tea\Model;

class analysisConfig extends Model
{
    /**
     * @var qualityControl
     */
    public $qualityControl;

    /**
     * @var propertiesControl
     */
    public $propertiesControl;
    protected $_name = [
        'qualityControl'    => 'QualityControl',
        'propertiesControl' => 'PropertiesControl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qualityControl) {
            $res['QualityControl'] = null !== $this->qualityControl ? $this->qualityControl->toMap() : null;
        }
        if (null !== $this->propertiesControl) {
            $res['PropertiesControl'] = null !== $this->propertiesControl ? $this->propertiesControl->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return analysisConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QualityControl'])) {
            $model->qualityControl = qualityControl::fromMap($map['QualityControl']);
        }
        if (isset($map['PropertiesControl'])) {
            $model->propertiesControl = propertiesControl::fromMap($map['PropertiesControl']);
        }

        return $model;
    }
}
