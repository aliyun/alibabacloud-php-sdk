<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class ListModulesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $excludeModuleIdsShrink;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $tagShrink;
    protected $_name = [
        'excludeModuleIdsShrink' => 'excludeModuleIds',
        'groupId' => 'groupId',
        'keyword' => 'keyword',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'projectId' => 'projectId',
        'tagShrink' => 'tag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludeModuleIdsShrink) {
            $res['excludeModuleIds'] = $this->excludeModuleIdsShrink;
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        if (null !== $this->tagShrink) {
            $res['tag'] = $this->tagShrink;
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
        if (isset($map['excludeModuleIds'])) {
            $model->excludeModuleIdsShrink = $map['excludeModuleIds'];
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['tag'])) {
            $model->tagShrink = $map['tag'];
        }

        return $model;
    }
}
