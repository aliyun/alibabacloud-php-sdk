<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSaasDataUnitUsageResponseBody;

use AlibabaCloud\Dara\Model;

class distribution extends Model
{
    /**
     * @var string
     */
    public $dataUnit;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $usageScene;

    /**
     * @var string
     */
    public $usageSceneName;
    protected $_name = [
        'dataUnit' => 'DataUnit',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'usageScene' => 'UsageScene',
        'usageSceneName' => 'UsageSceneName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataUnit) {
            $res['DataUnit'] = $this->dataUnit;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->usageScene) {
            $res['UsageScene'] = $this->usageScene;
        }

        if (null !== $this->usageSceneName) {
            $res['UsageSceneName'] = $this->usageSceneName;
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
        if (isset($map['DataUnit'])) {
            $model->dataUnit = $map['DataUnit'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['UsageScene'])) {
            $model->usageScene = $map['UsageScene'];
        }

        if (isset($map['UsageSceneName'])) {
            $model->usageSceneName = $map['UsageSceneName'];
        }

        return $model;
    }
}
