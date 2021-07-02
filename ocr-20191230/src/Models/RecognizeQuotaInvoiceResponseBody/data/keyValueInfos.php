<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQuotaInvoiceResponseBody\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQuotaInvoiceResponseBody\data\keyValueInfos\valuePositions;
use AlibabaCloud\Tea\Model;

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
        'key'            => 'Key',
        'value'          => 'Value',
        'valuePositions' => 'ValuePositions',
        'valueScore'     => 'ValueScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valuePositions) {
            $res['ValuePositions'] = [];
            if (null !== $this->valuePositions && \is_array($this->valuePositions)) {
                $n = 0;
                foreach ($this->valuePositions as $item) {
                    $res['ValuePositions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->valueScore) {
            $res['ValueScore'] = $this->valueScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyValueInfos
     */
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
                $n                     = 0;
                foreach ($map['ValuePositions'] as $item) {
                    $model->valuePositions[$n++] = null !== $item ? valuePositions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ValueScore'])) {
            $model->valueScore = $map['ValueScore'];
        }

        return $model;
    }
}
