<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ModifyAndroidInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $androidInstanceId;

    /**
     * @var string
     */
    public $newAndroidInstanceName;
    protected $_name = [
        'androidInstanceId' => 'AndroidInstanceId',
        'newAndroidInstanceName' => 'NewAndroidInstanceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
