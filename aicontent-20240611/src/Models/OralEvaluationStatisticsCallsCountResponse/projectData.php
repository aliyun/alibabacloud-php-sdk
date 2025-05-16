<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\OralEvaluationStatisticsCallsCountResponse;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\OralEvaluationStatisticsCallsCountResponse\projectData\applicationData;

class projectData extends Model
{
    /**
     * @var applicationData[]
     */
    public $applicationData;

    /**
     * @var string
     */
    public $applicationInternalId;
    protected $_name = [
        'applicationData' => 'ApplicationData',
        'applicationInternalId' => 'applicationInternalId',
    ];

    public function validate()
    {
        if (\is_array($this->applicationData)) {
            Model::validateArray($this->applicationData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationData) {
            if (\is_array($this->applicationData)) {
                $res['ApplicationData'] = [];
                $n1 = 0;
                foreach ($this->applicationData as $item1) {
                    $res['ApplicationData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->applicationInternalId) {
            $res['applicationInternalId'] = $this->applicationInternalId;
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
        if (isset($map['ApplicationData'])) {
            if (!empty($map['ApplicationData'])) {
                $model->applicationData = [];
                $n1 = 0;
                foreach ($map['ApplicationData'] as $item1) {
                    $model->applicationData[$n1++] = applicationData::fromMap($item1);
                }
            }
        }

        if (isset($map['applicationInternalId'])) {
            $model->applicationInternalId = $map['applicationInternalId'];
        }

        return $model;
    }
}
