<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\UpdateSecretRequest;

use AlibabaCloud\Dara\Model;

class extendedConfig extends Model
{
    /**
     * @var mixed[]
     */
    public $customData;
    protected $_name = [
        'customData' => 'CustomData',
    ];

    public function validate()
    {
        if (\is_array($this->customData)) {
            Model::validateArray($this->customData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customData) {
            if (\is_array($this->customData)) {
                $res['CustomData'] = [];
                foreach ($this->customData as $key1 => $value1) {
                    $res['CustomData'][$key1] = $value1;
                }
            }
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
        if (isset($map['CustomData'])) {
            if (!empty($map['CustomData'])) {
                $model->customData = [];
                foreach ($map['CustomData'] as $key1 => $value1) {
                    $model->customData[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
