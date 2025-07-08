<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateByCodeNewResponseBody;

use AlibabaCloud\Dara\Model;

class fileIds extends Model
{
    /**
     * @var int[]
     */
    public $fileId;
    protected $_name = [
        'fileId' => 'FileId',
    ];

    public function validate()
    {
        if (\is_array($this->fileId)) {
            Model::validateArray($this->fileId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileId) {
            if (\is_array($this->fileId)) {
                $res['FileId'] = [];
                $n1 = 0;
                foreach ($this->fileId as $item1) {
                    $res['FileId'][$n1] = $item1;
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
        if (isset($map['FileId'])) {
            if (!empty($map['FileId'])) {
                $model->fileId = [];
                $n1 = 0;
                foreach ($map['FileId'] as $item1) {
                    $model->fileId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
