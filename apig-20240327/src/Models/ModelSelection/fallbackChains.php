<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ModelSelection;

use AlibabaCloud\Dara\Model;

class fallbackChains extends Model
{
    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string[]
     */
    public $fallbackModelCardIds;

    /**
     * @var string
     */
    public $sourceModelCardId;
    protected $_name = [
        'endpoint' => 'endpoint',
        'fallbackModelCardIds' => 'fallbackModelCardIds',
        'sourceModelCardId' => 'sourceModelCardId',
    ];

    public function validate()
    {
        if (\is_array($this->fallbackModelCardIds)) {
            Model::validateArray($this->fallbackModelCardIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->fallbackModelCardIds) {
            if (\is_array($this->fallbackModelCardIds)) {
                $res['fallbackModelCardIds'] = [];
                $n1 = 0;
                foreach ($this->fallbackModelCardIds as $item1) {
                    $res['fallbackModelCardIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceModelCardId) {
            $res['sourceModelCardId'] = $this->sourceModelCardId;
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
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['fallbackModelCardIds'])) {
            if (!empty($map['fallbackModelCardIds'])) {
                $model->fallbackModelCardIds = [];
                $n1 = 0;
                foreach ($map['fallbackModelCardIds'] as $item1) {
                    $model->fallbackModelCardIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['sourceModelCardId'])) {
            $model->sourceModelCardId = $map['sourceModelCardId'];
        }

        return $model;
    }
}
