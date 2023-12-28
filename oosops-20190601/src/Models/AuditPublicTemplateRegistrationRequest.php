<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Tea\Model;

class AuditPublicTemplateRegistrationRequest extends Model
{
    /**
     * @var string
     */
    public $auditAction;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $registrationId;
    protected $_name = [
        'auditAction'    => 'AuditAction',
        'comment'        => 'Comment',
        'regionId'       => 'RegionId',
        'registrationId' => 'RegistrationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditAction) {
            $res['AuditAction'] = $this->auditAction;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->registrationId) {
            $res['RegistrationId'] = $this->registrationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuditPublicTemplateRegistrationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditAction'])) {
            $model->auditAction = $map['AuditAction'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegistrationId'])) {
            $model->registrationId = $map['RegistrationId'];
        }

        return $model;
    }
}
