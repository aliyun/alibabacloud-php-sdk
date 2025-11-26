<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SasRasp\V20240727\Models\DescribeAttacksResponseBody\attacks;

use AlibabaCloud\Dara\Model;

class inputParamItemList extends Model
{
    /**
     * @var string
     */
    public $processedKey;

    /**
     * @var string
     */
    public $rawKey;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'processedKey' => 'ProcessedKey',
        'rawKey' => 'RawKey',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
