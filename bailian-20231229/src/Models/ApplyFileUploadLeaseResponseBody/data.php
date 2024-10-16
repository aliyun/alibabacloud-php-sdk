<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyFileUploadLeaseResponseBody;

use AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyFileUploadLeaseResponseBody\data\param;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The unique ID of the lease. You need to specify this parameter when you call the [AddFile](https://help.aliyun.com/zh/model-studio/developer-reference/api-bailian-2023-12-29-addfile) operation.
     *
     * @example 1e6a159107384782be5e45ac4759b247.1719325231035
     *
     * @var string
     */
    public $fileUploadLeaseId;

    /**
     * @description The HTTP request parameters used to upload the document.
     *
     * @var param
     */
    public $param;

    /**
     * @description The upload method of the document. Valid values:
     *
     *   OSS.PreSignedURL
     *   HTTP
     *
     * @example HTTP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'fileUploadLeaseId' => 'FileUploadLeaseId',
        'param'             => 'Param',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileUploadLeaseId) {
            $res['FileUploadLeaseId'] = $this->fileUploadLeaseId;
        }
        if (null !== $this->param) {
            $res['Param'] = null !== $this->param ? $this->param->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileUploadLeaseId'])) {
            $model->fileUploadLeaseId = $map['FileUploadLeaseId'];
        }
        if (isset($map['Param'])) {
            $model->param = param::fromMap($map['Param']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
