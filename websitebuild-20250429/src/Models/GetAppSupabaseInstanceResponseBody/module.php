<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppSupabaseInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $anonKey;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var string
     */
    public $dbPublicUrl;

    /**
     * @var string
     */
    public $instanceCreateStatus;

    /**
     * @var string
     */
    public $serviceKey;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $supabaseInstanceId;

    /**
     * @var string
     */
    public $supabasePublicUrl;
    protected $_name = [
        'anonKey' => 'AnonKey',
        'bizId' => 'BizId',
        'dbInstanceId' => 'DbInstanceId',
        'dbPublicUrl' => 'DbPublicUrl',
        'instanceCreateStatus' => 'InstanceCreateStatus',
        'serviceKey' => 'ServiceKey',
        'status' => 'Status',
        'supabaseInstanceId' => 'SupabaseInstanceId',
        'supabasePublicUrl' => 'SupabasePublicUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anonKey) {
            $res['AnonKey'] = $this->anonKey;
        }

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }

        if (null !== $this->dbPublicUrl) {
            $res['DbPublicUrl'] = $this->dbPublicUrl;
        }

        if (null !== $this->instanceCreateStatus) {
            $res['InstanceCreateStatus'] = $this->instanceCreateStatus;
        }

        if (null !== $this->serviceKey) {
            $res['ServiceKey'] = $this->serviceKey;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supabaseInstanceId) {
            $res['SupabaseInstanceId'] = $this->supabaseInstanceId;
        }

        if (null !== $this->supabasePublicUrl) {
            $res['SupabasePublicUrl'] = $this->supabasePublicUrl;
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
        if (isset($map['AnonKey'])) {
            $model->anonKey = $map['AnonKey'];
        }

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }

        if (isset($map['DbPublicUrl'])) {
            $model->dbPublicUrl = $map['DbPublicUrl'];
        }

        if (isset($map['InstanceCreateStatus'])) {
            $model->instanceCreateStatus = $map['InstanceCreateStatus'];
        }

        if (isset($map['ServiceKey'])) {
            $model->serviceKey = $map['ServiceKey'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupabaseInstanceId'])) {
            $model->supabaseInstanceId = $map['SupabaseInstanceId'];
        }

        if (isset($map['SupabasePublicUrl'])) {
            $model->supabasePublicUrl = $map['SupabasePublicUrl'];
        }

        return $model;
    }
}
