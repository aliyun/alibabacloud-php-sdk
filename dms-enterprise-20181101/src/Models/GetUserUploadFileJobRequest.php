<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetUserUploadFileJobRequest extends Model
{
    /**
     * @description The key of the file upload task. The key is returned when you call the [CreateUploadFileJob](https://help.aliyun.com/document_detail/206059.html) or [CreateUploadOSSFileJob](https://help.aliyun.com/document_detail/206060.html) operation.
     *
     * This parameter is required.
     * @example 65254a49100e
     *
     * @var string
     */
    public $jobKey;

    /**
     * @description The tenant ID.
     *
     * > To view the tenant ID, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see [Manage DMS tenants](https://help.aliyun.com/document_detail/181330.html).
     * @example -1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'jobKey' => 'JobKey',
        'tid'    => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobKey) {
            $res['JobKey'] = $this->jobKey;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserUploadFileJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobKey'])) {
            $model->jobKey = $map['JobKey'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
