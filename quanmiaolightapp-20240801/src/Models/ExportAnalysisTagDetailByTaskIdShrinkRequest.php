<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class ExportAnalysisTagDetailByTaskIdShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $categoriesShrink;

    /**
     * @var string
     */
    public $category;

    /**
     * @description This parameter is required.
     *
     * @example a3d1c2ac-f086-4a21-9069-f5631542f5a2
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'categoriesShrink' => 'categories',
        'category' => 'category',
        'taskId' => 'taskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoriesShrink) {
            $res['categories'] = $this->categoriesShrink;
        }
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportAnalysisTagDetailByTaskIdShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['categories'])) {
            $model->categoriesShrink = $map['categories'];
        }
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
