<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\ValidateConfigSettingResponseBody;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\ValidateConfigSettingResponseBody\configValidationResults\configValidationResult;
use AlibabaCloud\Tea\Model;

class configValidationResults extends Model
{
    /**
     * @var configValidationResult[]
     */
    public $configValidationResult;
    protected $_name = [
        'configValidationResult' => 'ConfigValidationResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configValidationResult) {
            $res['ConfigValidationResult'] = [];
            if (null !== $this->configValidationResult && \is_array($this->configValidationResult)) {
                $n = 0;
                foreach ($this->configValidationResult as $item) {
                    $res['ConfigValidationResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configValidationResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigValidationResult'])) {
            if (!empty($map['ConfigValidationResult'])) {
                $model->configValidationResult = [];
                $n                             = 0;
                foreach ($map['ConfigValidationResult'] as $item) {
                    $model->configValidationResult[$n++] = null !== $item ? configValidationResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
