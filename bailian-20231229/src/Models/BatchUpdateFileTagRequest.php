<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\BatchUpdateFileTagRequest\fileInfos;

class BatchUpdateFileTagRequest extends Model
{
    /**
     * @var fileInfos[]
     */
    public $fileInfos;

    /**
     * @var string
     */
    public $updateMode;
    protected $_name = [
        'fileInfos' => 'FileInfos',
        'updateMode' => 'UpdateMode',
    ];

    public function validate()
    {
        if (\is_array($this->fileInfos)) {
            Model::validateArray($this->fileInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileInfos) {
            if (\is_array($this->fileInfos)) {
                $res['FileInfos'] = [];
                $n1 = 0;
                foreach ($this->fileInfos as $item1) {
                    $res['FileInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateMode) {
            $res['UpdateMode'] = $this->updateMode;
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
        if (isset($map['FileInfos'])) {
            if (!empty($map['FileInfos'])) {
                $model->fileInfos = [];
                $n1 = 0;
                foreach ($map['FileInfos'] as $item1) {
                    $model->fileInfos[$n1] = fileInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UpdateMode'])) {
            $model->updateMode = $map['UpdateMode'];
        }

        return $model;
    }
}
