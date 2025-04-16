<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $taskId;
    protected $_name = [
        'categoriesShrink' => 'categories',
        'category' => 'category',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
