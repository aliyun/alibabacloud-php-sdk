<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateProjectBasicMetaRequest\properties;

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
    public $enable;
    /**
     * @var string
     */
    public $key;
    protected $_name = [
        'algorithm' => 'algorithm',
        'enable'    => 'enable',
        'key'       => 'key',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['algorithm'] = $this->algorithm;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->key) {
            $res['key'] = $this->key;
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
        if (isset($map['algorithm'])) {
            $model->algorithm = $map['algorithm'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        return $model;
    }
}
