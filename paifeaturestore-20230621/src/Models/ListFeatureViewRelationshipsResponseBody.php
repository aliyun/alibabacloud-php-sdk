<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewRelationshipsResponseBody\relationships;

class ListFeatureViewRelationshipsResponseBody extends Model
{
    /**
     * @var relationships[]
     */
    public $relationships;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'relationships' => 'Relationships',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->relationships)) {
            Model::validateArray($this->relationships);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->relationships) {
            if (\is_array($this->relationships)) {
                $res['Relationships'] = [];
                $n1 = 0;
                foreach ($this->relationships as $item1) {
                    $res['Relationships'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Relationships'])) {
            if (!empty($map['Relationships'])) {
                $model->relationships = [];
                $n1 = 0;
                foreach ($map['Relationships'] as $item1) {
                    $model->relationships[$n1] = relationships::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
