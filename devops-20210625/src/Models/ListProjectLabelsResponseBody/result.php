<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectLabelsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example #A16AD7
     *
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $description;

    /**
     * @example f2bf0e0b4ce34a348b2d971c69a1d11f
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $openMergeRequestsCount;
    protected $_name = [
        'color'                  => 'color',
        'description'            => 'description',
        'id'                     => 'id',
        'name'                   => 'name',
        'openMergeRequestsCount' => 'openMergeRequestsCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->color) {
            $res['color'] = $this->color;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->openMergeRequestsCount) {
            $res['openMergeRequestsCount'] = $this->openMergeRequestsCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['color'])) {
            $model->color = $map['color'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['openMergeRequestsCount'])) {
            $model->openMergeRequestsCount = $map['openMergeRequestsCount'];
        }

        return $model;
    }
}
