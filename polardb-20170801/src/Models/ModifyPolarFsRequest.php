<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyPolarFsRequest extends Model
{
    /**
     * @var string
     */
    public $customOssAk;

    /**
     * @var string
     */
    public $customOssSk;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $polarFsInstanceId;
    protected $_name = [
        'customOssAk' => 'CustomOssAk',
        'customOssSk' => 'CustomOssSk',
        'DBClusterId' => 'DBClusterId',
        'polarFsInstanceId' => 'PolarFsInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customOssAk) {
            $res['CustomOssAk'] = $this->customOssAk;
        }

        if (null !== $this->customOssSk) {
            $res['CustomOssSk'] = $this->customOssSk;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->polarFsInstanceId) {
            $res['PolarFsInstanceId'] = $this->polarFsInstanceId;
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
        if (isset($map['CustomOssAk'])) {
            $model->customOssAk = $map['CustomOssAk'];
        }

        if (isset($map['CustomOssSk'])) {
            $model->customOssSk = $map['CustomOssSk'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['PolarFsInstanceId'])) {
            $model->polarFsInstanceId = $map['PolarFsInstanceId'];
        }

        return $model;
    }
}
