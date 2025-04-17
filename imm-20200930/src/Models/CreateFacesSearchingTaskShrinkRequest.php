<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateFacesSearchingTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var int
     */
    public $maxResult;

    /**
     * @var string
     */
    public $notificationShrink;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $sourcesShrink;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'maxResult' => 'MaxResult',
        'notificationShrink' => 'Notification',
        'projectName' => 'ProjectName',
        'sourcesShrink' => 'Sources',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->maxResult) {
            $res['MaxResult'] = $this->maxResult;
        }

        if (null !== $this->notificationShrink) {
            $res['Notification'] = $this->notificationShrink;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->sourcesShrink) {
            $res['Sources'] = $this->sourcesShrink;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['MaxResult'])) {
            $model->maxResult = $map['MaxResult'];
        }

        if (isset($map['Notification'])) {
            $model->notificationShrink = $map['Notification'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Sources'])) {
            $model->sourcesShrink = $map['Sources'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
