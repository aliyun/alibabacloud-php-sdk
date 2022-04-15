<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\AdaptGetServiceResponseBody;

use AlibabaCloud\SDK\CGCS\V20211111\Models\AdaptGetServiceResponseBody\data\adaptTarget;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $adaptStatus;

    /**
     * @var adaptTarget
     */
    public $adaptTarget;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appVersionId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'adaptStatus'  => 'AdaptStatus',
        'adaptTarget'  => 'AdaptTarget',
        'appId'        => 'AppId',
        'appVersionId' => 'AppVersionId',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'id'           => 'Id',
        'tenantId'     => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adaptStatus) {
            $res['AdaptStatus'] = $this->adaptStatus;
        }
        if (null !== $this->adaptTarget) {
            $res['AdaptTarget'] = null !== $this->adaptTarget ? $this->adaptTarget->toMap() : null;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdaptStatus'])) {
            $model->adaptStatus = $map['AdaptStatus'];
        }
        if (isset($map['AdaptTarget'])) {
            $model->adaptTarget = adaptTarget::fromMap($map['AdaptTarget']);
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
