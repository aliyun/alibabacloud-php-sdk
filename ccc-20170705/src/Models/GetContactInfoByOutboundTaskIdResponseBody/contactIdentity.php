<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetContactInfoByOutboundTaskIdResponseBody;

use AlibabaCloud\Tea\Model;

class contactIdentity extends Model
{
    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $contactReferrnceId;

    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $userPhone;
    protected $_name = [
        'caller'             => 'Caller',
        'contactReferrnceId' => 'ContactReferrnceId',
        'jobGroupId'         => 'JobGroupId',
        'userPhone'          => 'UserPhone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->contactReferrnceId) {
            $res['ContactReferrnceId'] = $this->contactReferrnceId;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->userPhone) {
            $res['UserPhone'] = $this->userPhone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactIdentity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['ContactReferrnceId'])) {
            $model->contactReferrnceId = $map['ContactReferrnceId'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['UserPhone'])) {
            $model->userPhone = $map['UserPhone'];
        }

        return $model;
    }
}
