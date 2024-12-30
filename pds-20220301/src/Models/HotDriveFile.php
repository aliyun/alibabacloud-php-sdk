<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class HotDriveFile extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $actionCount;

    /**
     * @var string[]
     */
    public $actionList;

    /**
     * @example doc
     *
     * @var string
     */
    public $category;

    /**
     * @example 1727059860000
     *
     * @var int
     */
    public $countAt;

    /**
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @example 666ff36c22278f023ec
     *
     * @var string
     */
    public $fileId;

    /**
     * @example a.jpg
     *
     * @var string
     */
    public $name;

    /**
     * @example 666ff36c22278f023ec
     *
     * @var string
     */
    public $revisionId;
    protected $_name = [
        'actionCount' => 'action_count',
        'actionList'  => 'action_list',
        'category'    => 'category',
        'countAt'     => 'count_at',
        'driveId'     => 'drive_id',
        'fileId'      => 'file_id',
        'name'        => 'name',
        'revisionId'  => 'revision_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionCount) {
            $res['action_count'] = $this->actionCount;
        }
        if (null !== $this->actionList) {
            $res['action_list'] = $this->actionList;
        }
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->countAt) {
            $res['count_at'] = $this->countAt;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->revisionId) {
            $res['revision_id'] = $this->revisionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotDriveFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action_count'])) {
            $model->actionCount = $map['action_count'];
        }
        if (isset($map['action_list'])) {
            if (!empty($map['action_list'])) {
                $model->actionList = $map['action_list'];
            }
        }
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['count_at'])) {
            $model->countAt = $map['count_at'];
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['revision_id'])) {
            $model->revisionId = $map['revision_id'];
        }

        return $model;
    }
}
