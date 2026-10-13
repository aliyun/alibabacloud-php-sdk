<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetMigrateApplicationResponseBody\data\result;

use AlibabaCloud\Dara\Model;

class extraInfo extends Model
{
    /**
     * @var string
     */
    public $appJsonFile;

    /**
     * @var string
     */
    public $errorMsg;
    protected $_name = [
        'appJsonFile' => 'appJsonFile',
        'errorMsg' => 'errorMsg',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appJsonFile) {
            $res['appJsonFile'] = $this->appJsonFile;
        }

        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
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
        if (isset($map['appJsonFile'])) {
            $model->appJsonFile = $map['appJsonFile'];
        }

        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        return $model;
    }
}
