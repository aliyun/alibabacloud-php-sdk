<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class SummaryImagesInfoResponseBody extends Model
{
    /**
     * @description The detailed information about the image.
     *
     * @example {"summaryImagesInfo":[{"ImageName":"gromacs.sif","ImageSize":"4","CreateTime":"16:18","CreateDate":"Apr.1"},{"ImageName":"linpack.sif","ImageSize":"665847525","CreateTime":"14:45","CreateDate":"Apr.1"},{"ImageName":"sccIntelMPI1.sif","ImageSize":"665847525","CreateTime":"14:41","CreateDate":"Apr.1"},{"ImageName":"test.sif","ImageSize":"24","CreateTime":"12:25","CreateDate":"Apr.20"},{"ImageName":"usergromac.sif.user","ImageSize":"4","CreateTime":"15:16","CreateDate":"Apr.19"}]}
     *
     * @var string
     */
    public $imagesInfo;

    /**
     * @description The request ID.
     *
     * @example 896D338C-E4F4-41EC-A154-D605E5DE****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imagesInfo' => 'ImagesInfo',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imagesInfo) {
            $res['ImagesInfo'] = $this->imagesInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SummaryImagesInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImagesInfo'])) {
            $model->imagesInfo = $map['ImagesInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
