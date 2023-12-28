<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\Tea\Model;

class ConfirmAvatar2dTrainRequest extends Model
{
    /**
     * @example CH_2d_xxxxxx
     *
     * @var string
     */
    public $code;

    /**
     * @example ACCEPT
     *
     * @var string
     */
    public $confirm;

    /**
     * @example xxxxx
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'code'     => 'Code',
        'confirm'  => 'Confirm',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->confirm) {
            $res['Confirm'] = $this->confirm;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfirmAvatar2dTrainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Confirm'])) {
            $model->confirm = $map['Confirm'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
