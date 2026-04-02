<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;

class DeleteTempFileTasksRequest extends Model
{
    /**
     * @var string[]
     */
    public $tempFileTaskIds;
    protected $_name = [
        'tempFileTaskIds' => 'TempFileTaskIds',
    ];

    public function validate()
    {
        if (\is_array($this->tempFileTaskIds)) {
            Model::validateArray($this->tempFileTaskIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tempFileTaskIds) {
            if (\is_array($this->tempFileTaskIds)) {
                $res['TempFileTaskIds'] = [];
                $n1 = 0;
                foreach ($this->tempFileTaskIds as $item1) {
                    $res['TempFileTaskIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['TempFileTaskIds'])) {
            if (!empty($map['TempFileTaskIds'])) {
                $model->tempFileTaskIds = [];
                $n1 = 0;
                foreach ($map['TempFileTaskIds'] as $item1) {
                    $model->tempFileTaskIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
