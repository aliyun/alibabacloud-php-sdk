<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationsForUserResponseBody;

use AlibabaCloud\Dara\Model;

class applications extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var bool
     */
    public $hasDirectAuthorization;

    /**
     * @var bool
     */
    public $hasInheritAuthorization;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'hasDirectAuthorization' => 'HasDirectAuthorization',
        'hasInheritAuthorization' => 'HasInheritAuthorization',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
