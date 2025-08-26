<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQuotaInvoiceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQuotaInvoiceResponseBody\data\keyValueInfos\valuePositions;

class keyValueInfos extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $value;

    /**
     * @var valuePositions[]
     */
    public $valuePositions;

    /**
     * @var float
     */
    public $valueScore;
    protected $_name = [
        'key' => 'Key',
        'value' => 'Value',
        'valuePositions' => 'ValuePositions',
        'valueScore' => 'ValueScore',
    ];

    public function validate()
    {
        if (\is_array($this->valuePositions)) {
            Model::validateArray($this->valuePositions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        if (null !== $this->valuePositions) {
            if (\is_array($this->valuePositions)) {
                $res['ValuePositions'] = [];
                $n1 = 0;
                foreach ($this->valuePositions as $item1) {
                    $res['ValuePositions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->valueScore) {
            $res['ValueScore'] = $this->valueScore;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        if (isset($map['ValuePositions'])) {
            if (!empty($map['ValuePositions'])) {
                $model->valuePositions = [];
                $n1 = 0;
                foreach ($map['ValuePositions'] as $item1) {
                    $model->valuePositions[$n1] = valuePositions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ValueScore'])) {
            $model->valueScore = $map['ValueScore'];
        }

        return $model;
    }
}
