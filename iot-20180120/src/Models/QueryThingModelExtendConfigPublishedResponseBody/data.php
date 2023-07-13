<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryThingModelExtendConfigPublishedResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about the extended TSL parameters. For more information about the definition of extended parameters, see [CreateThingModel](~~150323~~).
     *
     * For more information, see [Data structure of ThingModelJson](~~150457~~).
     * @example {\"profile\":{\"productKey\":\"a114x******\"},\"properties\":[{\"originalDataType\":{\"specs\":{\"registerCount\":1,\"reverseRegister\":0,\"swap16\":0},\"type\":\"bool\"},\"identifier\":\"WakeUpData\",\"registerAddress\":\"0x04\",\"scaling\":1,\"writeFunctionCode\":0,\"operateType\":\"inputStatus\",\"pollingTime\":1000,\"trigger\":1}]}
     *
     * @var string
     */
    public $configuration;
    protected $_name = [
        'configuration' => 'Configuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }

        return $model;
    }
}
