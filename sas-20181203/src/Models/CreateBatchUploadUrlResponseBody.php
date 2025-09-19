<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateBatchUploadUrlResponseBody\uploadUrlList;

class CreateBatchUploadUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var uploadUrlList[]
     */
    public $uploadUrlList;
    protected $_name = [
        'requestId' => 'RequestId',
        'uploadUrlList' => 'UploadUrlList',
    ];

    public function validate()
    {
        if (\is_array($this->uploadUrlList)) {
            Model::validateArray($this->uploadUrlList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->uploadUrlList) {
            if (\is_array($this->uploadUrlList)) {
                $res['UploadUrlList'] = [];
                $n1 = 0;
                foreach ($this->uploadUrlList as $item1) {
                    $res['UploadUrlList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UploadUrlList'])) {
            if (!empty($map['UploadUrlList'])) {
                $model->uploadUrlList = [];
                $n1 = 0;
                foreach ($map['UploadUrlList'] as $item1) {
                    $model->uploadUrlList[$n1] = uploadUrlList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
