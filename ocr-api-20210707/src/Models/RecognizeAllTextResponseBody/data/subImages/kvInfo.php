<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesKvInfoKvDetailsValue;

class kvInfo extends Model
{
    /**
     * @var mixed
     */
    public $data;

    /**
     * @var int
     */
    public $kvCount;

    /**
     * @var DataSubImagesKvInfoKvDetailsValue[]
     */
    public $kvDetails;
    protected $_name = [
        'data' => 'Data',
        'kvCount' => 'KvCount',
        'kvDetails' => 'KvDetails',
    ];

    public function validate()
    {
        if (\is_array($this->kvDetails)) {
            Model::validateArray($this->kvDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->kvCount) {
            $res['KvCount'] = $this->kvCount;
        }

        if (null !== $this->kvDetails) {
            if (\is_array($this->kvDetails)) {
                $res['KvDetails'] = [];
                foreach ($this->kvDetails as $key1 => $value1) {
                    $res['KvDetails'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['KvCount'])) {
            $model->kvCount = $map['KvCount'];
        }

        if (isset($map['KvDetails'])) {
            if (!empty($map['KvDetails'])) {
                $model->kvDetails = [];
                foreach ($map['KvDetails'] as $key1 => $value1) {
                    $model->kvDetails[$key1] = DataSubImagesKvInfoKvDetailsValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
