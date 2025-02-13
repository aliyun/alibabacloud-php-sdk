<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetDocContentShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dentryUuid;
    /**
     * @var string
     */
    public $targetFormat;
    /**
     * @var string
     */
    public $tenantContextShrink;
    /**
     * @var string
     */
    public $userToken;
    protected $_name = [
        'dentryUuid'          => 'DentryUuid',
        'targetFormat'        => 'TargetFormat',
        'tenantContextShrink' => 'TenantContext',
        'userToken'           => 'userToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dentryUuid) {
            $res['DentryUuid'] = $this->dentryUuid;
        }

        if (null !== $this->targetFormat) {
            $res['TargetFormat'] = $this->targetFormat;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        if (null !== $this->userToken) {
            $res['userToken'] = $this->userToken;
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
        if (isset($map['DentryUuid'])) {
            $model->dentryUuid = $map['DentryUuid'];
        }

        if (isset($map['TargetFormat'])) {
            $model->targetFormat = $map['TargetFormat'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['userToken'])) {
            $model->userToken = $map['userToken'];
        }

        return $model;
    }
}
