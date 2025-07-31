<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskUdfLineagesRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskUdfLineagesRequest\updateCommand\lineageGroupList;
use AlibabaCloud\Tea\Model;

class updateCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 12113111
     *
     * @var int
     */
    public $fileId;

    /**
     * @description This parameter is required.
     *
     * @var lineageGroupList[]
     */
    public $lineageGroupList;

    /**
     * @description This parameter is required.
     *
     * @example 131211211
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'fileId' => 'FileId',
        'lineageGroupList' => 'LineageGroupList',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->lineageGroupList) {
            $res['LineageGroupList'] = [];
            if (null !== $this->lineageGroupList && \is_array($this->lineageGroupList)) {
                $n = 0;
                foreach ($this->lineageGroupList as $item) {
                    $res['LineageGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return updateCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['LineageGroupList'])) {
            if (!empty($map['LineageGroupList'])) {
                $model->lineageGroupList = [];
                $n = 0;
                foreach ($map['LineageGroupList'] as $item) {
                    $model->lineageGroupList[$n++] = null !== $item ? lineageGroupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
