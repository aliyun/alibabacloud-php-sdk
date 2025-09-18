<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest;

use AlibabaCloud\Dara\Model;

class serviceLocaleConfigs extends Model
{
    /**
     * @var string
     */
    public $enValue;

    /**
     * @var string
     */
    public $originalValue;

    /**
     * @var string
     */
    public $zhValue;
    protected $_name = [
        'enValue' => 'EnValue',
        'originalValue' => 'OriginalValue',
        'zhValue' => 'ZhValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enValue) {
            $res['EnValue'] = $this->enValue;
        }

        if (null !== $this->originalValue) {
            $res['OriginalValue'] = $this->originalValue;
        }

        if (null !== $this->zhValue) {
            $res['ZhValue'] = $this->zhValue;
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
        if (isset($map['EnValue'])) {
            $model->enValue = $map['EnValue'];
        }

        if (isset($map['OriginalValue'])) {
            $model->originalValue = $map['OriginalValue'];
        }

        if (isset($map['ZhValue'])) {
            $model->zhValue = $map['ZhValue'];
        }

        return $model;
    }
}
