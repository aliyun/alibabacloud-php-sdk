<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;

class UnbindAliasRequest extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var int
     */
    public $appKey;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var bool
     */
    public $unbindAll;
    protected $_name = [
        'aliasName' => 'AliasName',
        'appKey' => 'AppKey',
        'deviceId' => 'DeviceId',
        'unbindAll' => 'UnbindAll',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->unbindAll) {
            $res['UnbindAll'] = $this->unbindAll;
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
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['UnbindAll'])) {
            $model->unbindAll = $map['UnbindAll'];
        }

        return $model;
    }
}
