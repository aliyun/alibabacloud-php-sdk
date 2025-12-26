<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Deployment;

use AlibabaCloud\Dara\Model;

class chatHistoryConfig extends Model
{
    /**
     * @var string
     */
    public $connectionName;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'connectionName' => 'ConnectionName',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
