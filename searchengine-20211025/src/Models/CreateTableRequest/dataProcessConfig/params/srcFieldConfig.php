<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateTableRequest\dataProcessConfig\params;

use AlibabaCloud\Dara\Model;

class srcFieldConfig extends Model
{
    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'ossBucket' => 'ossBucket',
        'ossEndpoint' => 'ossEndpoint',
        'uid' => 'uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossBucket) {
            $res['ossBucket'] = $this->ossBucket;
        }

        if (null !== $this->ossEndpoint) {
            $res['ossEndpoint'] = $this->ossEndpoint;
        }

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
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
        if (isset($map['ossBucket'])) {
            $model->ossBucket = $map['ossBucket'];
        }

        if (isset($map['ossEndpoint'])) {
            $model->ossEndpoint = $map['ossEndpoint'];
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
