<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\RegisterAppResourcePermissionsRequest\items;

use AlibabaCloud\Dara\Model;

class grantees extends Model
{
    /**
     * @var string
     */
    public $granteeId;

    /**
     * @var string
     */
    public $granteeTenantId;

    /**
     * @var string
     */
    public $granteeType;
    protected $_name = [
        'granteeId' => 'granteeId',
        'granteeTenantId' => 'granteeTenantId',
        'granteeType' => 'granteeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->granteeId) {
            $res['granteeId'] = $this->granteeId;
        }

        if (null !== $this->granteeTenantId) {
            $res['granteeTenantId'] = $this->granteeTenantId;
        }

        if (null !== $this->granteeType) {
            $res['granteeType'] = $this->granteeType;
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
        if (isset($map['granteeId'])) {
            $model->granteeId = $map['granteeId'];
        }

        if (isset($map['granteeTenantId'])) {
            $model->granteeTenantId = $map['granteeTenantId'];
        }

        if (isset($map['granteeType'])) {
            $model->granteeType = $map['granteeType'];
        }

        return $model;
    }
}
