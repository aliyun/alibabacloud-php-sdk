<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class GetBatchSignedUrlRequest extends Model
{
    /**
     * @var string[]
     */
    public $fileUrlList;
    protected $_name = [
        'fileUrlList' => 'FileUrlList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileUrlList) {
            $res['FileUrlList'] = $this->fileUrlList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBatchSignedUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileUrlList'])) {
            if (!empty($map['FileUrlList'])) {
                $model->fileUrlList = $map['FileUrlList'];
            }
        }

        return $model;
    }
}
