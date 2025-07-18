<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SasRasp\V20240727\Models\DescribeAttacksResponseBody\attacks;

use AlibabaCloud\Tea\Model;

class inputParamItemList extends Model
{
    /**
     * @example 4E7772EA-1AD0-5583-BA55-A4****
     *
     * @var string
     */
    public $processedKey;

    /**
     * @example 4E7772EA-1AD0-5583-BA55-A4****
     *
     * @var string
     */
    public $rawKey;

    /**
     * @example 10.101.9.189
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'processedKey' => 'ProcessedKey',
        'rawKey' => 'RawKey',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->processedKey) {
            $res['ProcessedKey'] = $this->processedKey;
        }
        if (null !== $this->rawKey) {
            $res['RawKey'] = $this->rawKey;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputParamItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProcessedKey'])) {
            $model->processedKey = $map['ProcessedKey'];
        }
        if (isset($map['RawKey'])) {
            $model->rawKey = $map['RawKey'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
