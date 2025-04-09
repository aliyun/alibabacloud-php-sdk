<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppRequest;

use AlibabaCloud\Dara\Model;

class quotaInfo extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var int
     */
    public $cu;

    /**
     * @var int
     */
    public $storage;
    protected $_name = [
        'appType' => 'appType',
        'cu' => 'cu',
        'storage' => 'storage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appType) {
            $res['appType'] = $this->appType;
        }

        if (null !== $this->cu) {
            $res['cu'] = $this->cu;
        }

        if (null !== $this->storage) {
            $res['storage'] = $this->storage;
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
        if (isset($map['appType'])) {
            $model->appType = $map['appType'];
        }

        if (isset($map['cu'])) {
            $model->cu = $map['cu'];
        }

        if (isset($map['storage'])) {
            $model->storage = $map['storage'];
        }

        return $model;
    }
}
