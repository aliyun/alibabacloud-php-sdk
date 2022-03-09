<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUploadFindByProjectIdAppResponseBody\datasetUploadInfoResponseList;
use AlibabaCloud\Tea\Model;

class DatasetUploadFindByProjectIdAppResponseBody extends Model
{
    /**
     * @var datasetUploadInfoResponseList[]
     */
    public $datasetUploadInfoResponseList;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'datasetUploadInfoResponseList' => 'DatasetUploadInfoResponseList',
        'requestId'                     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetUploadInfoResponseList) {
            $res['DatasetUploadInfoResponseList'] = [];
            if (null !== $this->datasetUploadInfoResponseList && \is_array($this->datasetUploadInfoResponseList)) {
                $n = 0;
                foreach ($this->datasetUploadInfoResponseList as $item) {
                    $res['DatasetUploadInfoResponseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DatasetUploadFindByProjectIdAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetUploadInfoResponseList'])) {
            if (!empty($map['DatasetUploadInfoResponseList'])) {
                $model->datasetUploadInfoResponseList = [];
                $n                                    = 0;
                foreach ($map['DatasetUploadInfoResponseList'] as $item) {
                    $model->datasetUploadInfoResponseList[$n++] = null !== $item ? datasetUploadInfoResponseList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
