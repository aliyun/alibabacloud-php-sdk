<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CacheCluster;

use AlibabaCloud\Dara\Model;

class usedResourceSpec extends Model
{
    /**
     * @var int
     */
    public $bandWidth;

    /**
     * @var int
     */
    public $storage;
    protected $_name = [
        'bandWidth' => 'bandWidth',
        'storage' => 'storage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandWidth) {
            $res['bandWidth'] = $this->bandWidth;
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
        if (isset($map['bandWidth'])) {
            $model->bandWidth = $map['bandWidth'];
        }

        if (isset($map['storage'])) {
            $model->storage = $map['storage'];
        }

        return $model;
    }
}
