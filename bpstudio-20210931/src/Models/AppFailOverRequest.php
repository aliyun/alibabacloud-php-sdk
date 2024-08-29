<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Tea\Model;

class AppFailOverRequest extends Model
{
    /**
     * @description The application ID.
     *
     * @example BE68D71ZY5YYIU9R
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The destination zone to which you want to switch the disaster recovery application.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $failZone;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'failZone'      => 'FailZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->failZone) {
            $res['FailZone'] = $this->failZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppFailOverRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['FailZone'])) {
            $model->failZone = $map['FailZone'];
        }

        return $model;
    }
}
