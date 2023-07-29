<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class InstallRaspAttachRequest extends Model
{
    /**
     * @example 64b8b994563c306b4fedxxxx
     *
     * @var string
     */
    public $applicationId;

    /**
     * @var string[]
     */
    public $ecsUUIDList;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'ecsUUIDList'   => 'EcsUUIDList',
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
        if (null !== $this->ecsUUIDList) {
            $res['EcsUUIDList'] = $this->ecsUUIDList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallRaspAttachRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['EcsUUIDList'])) {
            if (!empty($map['EcsUUIDList'])) {
                $model->ecsUUIDList = $map['EcsUUIDList'];
            }
        }

        return $model;
    }
}
