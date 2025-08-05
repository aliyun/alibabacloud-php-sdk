<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CheckServiceLinkedRoleForProductResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the service-linked role exists.
     *
     * @example true
     *
     * @var bool
     */
    public $checkPass;

    /**
     * @description The name of the service-linked role.
     *
     * @example AliyunServiceRoleForEventBridgeConnectVPC
     *
     * @var string
     */
    public $stsRoleName;
    protected $_name = [
        'checkPass' => 'CheckPass',
        'stsRoleName' => 'StsRoleName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkPass) {
            $res['CheckPass'] = $this->checkPass;
        }
        if (null !== $this->stsRoleName) {
            $res['StsRoleName'] = $this->stsRoleName;
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
        if (isset($map['CheckPass'])) {
            $model->checkPass = $map['CheckPass'];
        }
        if (isset($map['StsRoleName'])) {
            $model->stsRoleName = $map['StsRoleName'];
        }

        return $model;
    }
}
