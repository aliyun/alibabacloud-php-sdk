<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetUploadProgressResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetUploadProgressResponseBody\uploadProgress\uploadProgressList;

class uploadProgress extends Model
{
    /**
     * @var uploadProgressList[]
     */
    public $uploadProgressList;
    protected $_name = [
        'uploadProgressList' => 'UploadProgressList',
    ];

    public function validate()
    {
        if (\is_array($this->uploadProgressList)) {
            Model::validateArray($this->uploadProgressList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->uploadProgressList) {
            if (\is_array($this->uploadProgressList)) {
                $res['UploadProgressList'] = [];
                $n1 = 0;
                foreach ($this->uploadProgressList as $item1) {
                    $res['UploadProgressList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['UploadProgressList'])) {
            if (!empty($map['UploadProgressList'])) {
                $model->uploadProgressList = [];
                $n1 = 0;
                foreach ($map['UploadProgressList'] as $item1) {
                    $model->uploadProgressList[$n1] = uploadProgressList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
