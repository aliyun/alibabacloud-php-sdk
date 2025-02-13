<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetFileDownloadInfoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dentryId;
    /**
     * @var string
     */
    public $optionShrink;
    /**
     * @var string
     */
    public $spaceId;
    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'dentryId'            => 'DentryId',
        'optionShrink'        => 'Option',
        'spaceId'             => 'SpaceId',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dentryId) {
            $res['DentryId'] = $this->dentryId;
        }

        if (null !== $this->optionShrink) {
            $res['Option'] = $this->optionShrink;
        }

        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
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
        if (isset($map['DentryId'])) {
            $model->dentryId = $map['DentryId'];
        }

        if (isset($map['Option'])) {
            $model->optionShrink = $map['Option'];
        }

        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
