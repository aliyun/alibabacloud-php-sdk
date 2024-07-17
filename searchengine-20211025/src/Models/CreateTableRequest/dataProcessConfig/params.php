<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateTableRequest\dataProcessConfig;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateTableRequest\dataProcessConfig\params\srcFieldConfig;
use AlibabaCloud\Tea\Model;

class params extends Model
{
    /**
     * @description The source of the data to be vectorized.
     *
     * @var srcFieldConfig
     */
    public $srcFieldConfig;

    /**
     * @description The data type.
     *
     * @example image
     *
     * @var string
     */
    public $vectorModal;

    /**
     * @description The vectorization model.
     *
     * @example clip
     *
     * @var string
     */
    public $vectorModel;
    protected $_name = [
        'srcFieldConfig' => 'srcFieldConfig',
        'vectorModal'    => 'vectorModal',
        'vectorModel'    => 'vectorModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->srcFieldConfig) {
            $res['srcFieldConfig'] = null !== $this->srcFieldConfig ? $this->srcFieldConfig->toMap() : null;
        }
        if (null !== $this->vectorModal) {
            $res['vectorModal'] = $this->vectorModal;
        }
        if (null !== $this->vectorModel) {
            $res['vectorModel'] = $this->vectorModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return params
     */
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
