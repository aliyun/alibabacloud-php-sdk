<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class GetPrivateAccessApplicationRequest extends Model
{
    /**
     * @description The ID of the office application. You can obtain the value by calling the following operations:
     *
     *   [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~): queries office applications.
     *   [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~): creates an office application.
     *
     * This parameter is required.
     *
     * @example pa-application-e12860ef6c48****
     *
     * @var string
     */
    public $applicationId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPrivateAccessApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        return $model;
    }
}
