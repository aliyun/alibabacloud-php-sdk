<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class UpdateBatchShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $actionsShrink;

    /**
     * @description This parameter is required.
     *
     * @example batch-4eb9223f-3e88-42d3-a578-3f2852******
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $inputShrink;

    /**
     * @description This parameter is required.
     *
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @example {"key":"val"}
     *
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'actionsShrink' => 'Actions',
        'id'            => 'Id',
        'inputShrink'   => 'Input',
        'projectName'   => 'ProjectName',
        'tagsShrink'    => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionsShrink) {
            $res['Actions'] = $this->actionsShrink;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBatchShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Actions'])) {
            $model->actionsShrink = $map['Actions'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Input'])) {
            $model->inputShrink = $map['Input'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
