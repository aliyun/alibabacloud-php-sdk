<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetLiveDomainMultiStreamConfigRequest extends Model
{
    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Specifies whether to enable the dual-stream disaster recovery feature. Valid values:
     *
     *   **on**: enables the feature.
     *   **off**: disables the feature.
     *
     * This parameter is required.
     *
     * @example on
     *
     * @var string
     */
    public $switch;
    protected $_name = [
        'domain' => 'Domain',
        'ownerId' => 'OwnerId',
        'switch' => 'Switch',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->switch) {
            $res['Switch'] = $this->switch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLiveDomainMultiStreamConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Switch'])) {
            $model->switch = $map['Switch'];
        }

        return $model;
    }
}
