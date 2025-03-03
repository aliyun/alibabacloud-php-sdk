<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListResourcesResponseBody\resources;

use AlibabaCloud\Dara\Model;

class encryption extends Model
{
    /**
     * @var string
     */
    public $algorithm;
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @var string
     */
    public $key;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'enabled'   => 'Enabled',
        'key'       => 'Key',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
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
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
