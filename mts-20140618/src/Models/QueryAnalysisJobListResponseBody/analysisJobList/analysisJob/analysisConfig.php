<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponseBody\analysisJobList\analysisJob;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponseBody\analysisJobList\analysisJob\analysisConfig\propertiesControl;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponseBody\analysisJobList\analysisJob\analysisConfig\qualityControl;

class analysisConfig extends Model
{
    /**
     * @var propertiesControl
     */
    public $propertiesControl;

    /**
     * @var qualityControl
     */
    public $qualityControl;
    protected $_name = [
        'propertiesControl' => 'PropertiesControl',
        'qualityControl' => 'QualityControl',
    ];

    public function validate()
    {
        if (null !== $this->propertiesControl) {
            $this->propertiesControl->validate();
        }
        if (null !== $this->qualityControl) {
            $this->qualityControl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertiesControl) {
            $res['PropertiesControl'] = null !== $this->propertiesControl ? $this->propertiesControl->toArray($noStream) : $this->propertiesControl;
        }

        if (null !== $this->qualityControl) {
            $res['QualityControl'] = null !== $this->qualityControl ? $this->qualityControl->toArray($noStream) : $this->qualityControl;
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
        if (isset($map['PropertiesControl'])) {
            $model->propertiesControl = propertiesControl::fromMap($map['PropertiesControl']);
        }

        if (isset($map['QualityControl'])) {
            $model->qualityControl = qualityControl::fromMap($map['QualityControl']);
        }

        return $model;
    }
}
