<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class CreateIndividuationProjectRequest extends Model
{
    /**
     * @var string
     */
    public $projectInfo;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $purpose;

    /**
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'projectInfo' => 'projectInfo',
        'projectName' => 'projectName',
        'purpose' => 'purpose',
        'sceneId' => 'sceneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectInfo) {
            $res['projectInfo'] = $this->projectInfo;
        }

        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }

        if (null !== $this->purpose) {
            $res['purpose'] = $this->purpose;
        }

        if (null !== $this->sceneId) {
            $res['sceneId'] = $this->sceneId;
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
        if (isset($map['projectInfo'])) {
            $model->projectInfo = $map['projectInfo'];
        }

        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }

        if (isset($map['purpose'])) {
            $model->purpose = $map['purpose'];
        }

        if (isset($map['sceneId'])) {
            $model->sceneId = $map['sceneId'];
        }

        return $model;
    }
}
