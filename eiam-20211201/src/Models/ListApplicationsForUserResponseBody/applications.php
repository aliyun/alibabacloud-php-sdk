<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForUserResponseBody;

use AlibabaCloud\Tea\Model;

class applications extends Model
{
    /**
     * @description The ID of the application that the EIAM account can access.
     *
     * @example app_mkv7rgt4d7i4u7zqtzev2mxxxx
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description Indicates whether the EIAM account has direct permissions on the application. Valid values:
     *
     *   true: The EIAM account has direct permissions on the application.
     *   false: The EIAM account does not have direct permissions on the application.
     *
     * @example true
     *
     * @var bool
     */
    public $hasDirectAuthorization;

    /**
     * @description Indicates whether the EIAM account has inherited permissions on the application. Valid values:
     *
     *   true: A parent organization or an organization to which the EIAM account belongs has direct permissions on the application.
     *   false: A parent organization or an organization to which the EIAM account belongs does not have direct permissions on the application.
     *
     * @example false
     *
     * @var bool
     */
    public $hasInheritAuthorization;
    protected $_name = [
        'applicationId'           => 'ApplicationId',
        'hasDirectAuthorization'  => 'HasDirectAuthorization',
        'hasInheritAuthorization' => 'HasInheritAuthorization',
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
        if (null !== $this->hasDirectAuthorization) {
            $res['HasDirectAuthorization'] = $this->hasDirectAuthorization;
        }
        if (null !== $this->hasInheritAuthorization) {
            $res['HasInheritAuthorization'] = $this->hasInheritAuthorization;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['HasDirectAuthorization'])) {
            $model->hasDirectAuthorization = $map['HasDirectAuthorization'];
        }
        if (isset($map['HasInheritAuthorization'])) {
            $model->hasInheritAuthorization = $map['HasInheritAuthorization'];
        }

        return $model;
    }
}
