<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\CreateInstanceRequest\components;

use AlibabaCloud\Dara\Model;

class dataDisk extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $performanceLevel;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'enabled' => 'enabled',
        'performanceLevel' => 'performanceLevel',
        'size' => 'size',
        'storageClass' => 'storageClass',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->performanceLevel) {
            $res['performanceLevel'] = $this->performanceLevel;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->storageClass) {
            $res['storageClass'] = $this->storageClass;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['performanceLevel'])) {
            $model->performanceLevel = $map['performanceLevel'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['storageClass'])) {
            $model->storageClass = $map['storageClass'];
        }

        return $model;
    }
}
