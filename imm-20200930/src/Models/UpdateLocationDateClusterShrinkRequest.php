<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class UpdateLocationDateClusterShrinkRequest extends Model
{
    /**
     * @example customid1
     *
     * @var string
     */
    public $customId;

    /**
     * @example {"UserScore": "5"}
     *
     * @var string
     */
    public $customLabelsShrink;

    /**
     * @example dataset001
     *
     * @var string
     */
    public $datasetName;

    /**
     * @example id1
     *
     * @var string
     */
    public $objectId;

    /**
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example title1
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'customId'           => 'CustomId',
        'customLabelsShrink' => 'CustomLabels',
        'datasetName'        => 'DatasetName',
        'objectId'           => 'ObjectId',
        'projectName'        => 'ProjectName',
        'title'              => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateLocationDateClusterShrinkRequest
     */
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
