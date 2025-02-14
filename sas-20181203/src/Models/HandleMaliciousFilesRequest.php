<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class HandleMaliciousFilesRequest extends Model
{
    /**
     * @var int[]
     */
    public $fileIdList;
    /**
     * @var string
     */
    public $operation;
    protected $_name = [
        'fileIdList' => 'FileIdList',
        'operation'  => 'Operation',
    ];

    public function validate()
    {
        if (\is_array($this->fileIdList)) {
            Model::validateArray($this->fileIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileIdList) {
            if (\is_array($this->fileIdList)) {
                $res['FileIdList'] = [];
                $n1                = 0;
                foreach ($this->fileIdList as $item1) {
                    $res['FileIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
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
        if (isset($map['FileIdList'])) {
            if (!empty($map['FileIdList'])) {
                $model->fileIdList = [];
                $n1                = 0;
                foreach ($map['FileIdList'] as $item1) {
                    $model->fileIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        return $model;
    }
}
