<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class ModelTemplate extends Model
{
    /**
     * @var string
     */
    public $collections;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $provider;
    protected $_name = [
        'collections' => 'Collections',
        'modelName' => 'ModelName',
        'provider' => 'Provider',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collections) {
            $res['Collections'] = $this->collections;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
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
        if (isset($map['Collections'])) {
            $model->collections = $map['Collections'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        return $model;
    }
}
