<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetUserUploadFileJobRequest extends Model
{
    /**
     * @description The key of the file upload task. You can call the [CreateUploadFileJob](~~206059~~) or [CreateUploadOSSFileJob](~~206060~~) operation to query the key.
     *
     * @example 65254a49100e
     *
     * @var string
     */
    public $jobKey;

    /**
     * @description The ID of the tenant.
     *
     * >  To view the ID of the tenant, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see the "View information about the current tenant" section of the [Manage DMS tenants](~~181330~~) topic.
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
