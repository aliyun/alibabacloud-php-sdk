<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class BatchGetFileMetaShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $projectName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $URIsShrink;

    /**
     * @var string
     */
    public $withFieldsShrink;
    protected $_name = [
        'datasetName'      => 'DatasetName',
        'projectName'      => 'ProjectName',
        'URIsShrink'       => 'URIs',
        'withFieldsShrink' => 'WithFields',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->URIsShrink) {
            $res['URIs'] = $this->URIsShrink;
        }
        if (null !== $this->withFieldsShrink) {
            $res['WithFields'] = $this->withFieldsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetFileMetaShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['URIs'])) {
            $model->URIsShrink = $map['URIs'];
        }
        if (isset($map['WithFields'])) {
            $model->withFieldsShrink = $map['WithFields'];
        }

        return $model;
    }
}
