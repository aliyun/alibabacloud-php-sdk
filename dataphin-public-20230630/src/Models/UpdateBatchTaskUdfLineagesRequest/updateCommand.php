<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskUdfLineagesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskUdfLineagesRequest\updateCommand\lineageGroupList;

class updateCommand extends Model
{
    /**
     * @var int
     */
    public $fileId;

    /**
     * @var lineageGroupList[]
     */
    public $lineageGroupList;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'fileId' => 'FileId',
        'lineageGroupList' => 'LineageGroupList',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        if (\is_array($this->lineageGroupList)) {
            Model::validateArray($this->lineageGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->lineageGroupList) {
            if (\is_array($this->lineageGroupList)) {
                $res['LineageGroupList'] = [];
                $n1 = 0;
                foreach ($this->lineageGroupList as $item1) {
                    $res['LineageGroupList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['LineageGroupList'])) {
            if (!empty($map['LineageGroupList'])) {
                $model->lineageGroupList = [];
                $n1 = 0;
                foreach ($map['LineageGroupList'] as $item1) {
                    $model->lineageGroupList[$n1++] = lineageGroupList::fromMap($item1);
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
