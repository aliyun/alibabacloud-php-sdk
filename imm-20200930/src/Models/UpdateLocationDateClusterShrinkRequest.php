<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class UpdateLocationDateClusterShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $customId;

    /**
     * @var string
     */
    public $customLabelsShrink;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'customId' => 'CustomId',
        'customLabelsShrink' => 'CustomLabels',
        'datasetName' => 'DatasetName',
        'objectId' => 'ObjectId',
        'projectName' => 'ProjectName',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }

        if (null !== $this->customLabelsShrink) {
            $res['CustomLabels'] = $this->customLabelsShrink;
        }

        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }

        if (isset($map['CustomLabels'])) {
            $model->customLabelsShrink = $map['CustomLabels'];
        }

        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
