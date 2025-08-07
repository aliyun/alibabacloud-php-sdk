<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class ListChunksRequest extends Model
{
    /**
     * @var string[]
     */
    public $fields;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $filed;

    /**
     * @var string
     */
    public $indexId;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'fields' => 'Fields',
        'fileId' => 'FileId',
        'filed' => 'Filed',
        'indexId' => 'IndexId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['Fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['Fields'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->filed) {
            $res['Filed'] = $this->filed;
        }

        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['Fields'] as $item1) {
                    $model->fields[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['Filed'])) {
            $model->filed = $map['Filed'];
        }

        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
