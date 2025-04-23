<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateTableRequest\dataProcessConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateTableRequest\dataProcessConfig\params\srcFieldConfig;

class params extends Model
{
    /**
     * @var srcFieldConfig
     */
    public $srcFieldConfig;

    /**
     * @var string
     */
    public $vectorModal;

    /**
     * @var string
     */
    public $vectorModel;
    protected $_name = [
        'srcFieldConfig' => 'srcFieldConfig',
        'vectorModal' => 'vectorModal',
        'vectorModel' => 'vectorModel',
    ];

    public function validate()
    {
        if (null !== $this->srcFieldConfig) {
            $this->srcFieldConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->srcFieldConfig) {
            $res['srcFieldConfig'] = null !== $this->srcFieldConfig ? $this->srcFieldConfig->toArray($noStream) : $this->srcFieldConfig;
        }

        if (null !== $this->vectorModal) {
            $res['vectorModal'] = $this->vectorModal;
        }

        if (null !== $this->vectorModel) {
            $res['vectorModel'] = $this->vectorModel;
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
        if (isset($map['srcFieldConfig'])) {
            $model->srcFieldConfig = srcFieldConfig::fromMap($map['srcFieldConfig']);
        }

        if (isset($map['vectorModal'])) {
            $model->vectorModal = $map['vectorModal'];
        }

        if (isset($map['vectorModel'])) {
            $model->vectorModel = $map['vectorModel'];
        }

        return $model;
    }
}
