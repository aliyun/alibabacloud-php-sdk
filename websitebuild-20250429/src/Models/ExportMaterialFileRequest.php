<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class ExportMaterialFileRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string[]
     */
    public $fileIds;
    protected $_name = [
        'bizId' => 'BizId',
        'fileIds' => 'FileIds',
    ];

    public function validate()
    {
        if (\is_array($this->fileIds)) {
            Model::validateArray($this->fileIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->fileIds) {
            if (\is_array($this->fileIds)) {
                $res['FileIds'] = [];
                $n1 = 0;
                foreach ($this->fileIds as $item1) {
                    $res['FileIds'][$n1] = $item1;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['FileIds'])) {
            if (!empty($map['FileIds'])) {
                $model->fileIds = [];
                $n1 = 0;
                foreach ($map['FileIds'] as $item1) {
                    $model->fileIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
