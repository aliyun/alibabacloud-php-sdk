<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ModifyAndroidInstanceRequest extends Model
{
    /**
     * @example acp-8v5bjld0r7tkl****
     *
     * @var string
     */
    public $androidInstanceId;

    /**
     * @example new_name
     *
     * @var string
     */
    public $newAndroidInstanceName;
    protected $_name = [
        'androidInstanceId'      => 'AndroidInstanceId',
        'newAndroidInstanceName' => 'NewAndroidInstanceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceId) {
            $res['AndroidInstanceId'] = $this->androidInstanceId;
        }
        if (null !== $this->newAndroidInstanceName) {
            $res['NewAndroidInstanceName'] = $this->newAndroidInstanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAndroidInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceId'])) {
            $model->androidInstanceId = $map['AndroidInstanceId'];
        }
        if (isset($map['NewAndroidInstanceName'])) {
            $model->newAndroidInstanceName = $map['NewAndroidInstanceName'];
        }

        return $model;
    }
}
