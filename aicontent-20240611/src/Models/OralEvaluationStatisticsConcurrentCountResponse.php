<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\OralEvaluationStatisticsConcurrentCountResponse\projectData;

class OralEvaluationStatisticsConcurrentCountResponse extends Model
{
    /**
     * @var projectData
     */
    public $projectData;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'projectData' => 'projectData',
        'projectId' => 'projectId',
    ];

    public function validate()
    {
        if (null !== $this->projectData) {
            $this->projectData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectData) {
            $res['projectData'] = null !== $this->projectData ? $this->projectData->toArray($noStream) : $this->projectData;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
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
        if (isset($map['projectData'])) {
            $model->projectData = projectData::fromMap($map['projectData']);
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        return $model;
    }
}
