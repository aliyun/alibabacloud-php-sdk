<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MetadataInfoListResult extends Model
{
    /**
     * @var MetadataInfo[]
     */
    public $metadataInfos;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'metadataInfos' => 'metadataInfos',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->metadataInfos)) {
            Model::validateArray($this->metadataInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metadataInfos) {
            if (\is_array($this->metadataInfos)) {
                $res['metadataInfos'] = [];
                $n1 = 0;
                foreach ($this->metadataInfos as $item1) {
                    $res['metadataInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['metadataInfos'])) {
            if (!empty($map['metadataInfos'])) {
                $model->metadataInfos = [];
                $n1 = 0;
                foreach ($map['metadataInfos'] as $item1) {
                    $model->metadataInfos[$n1] = MetadataInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
