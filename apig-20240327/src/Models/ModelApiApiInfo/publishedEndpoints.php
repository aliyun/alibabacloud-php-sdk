<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ModelApiApiInfo;

use AlibabaCloud\Dara\Model;

class publishedEndpoints extends Model
{
    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string[]
     */
    public $modelCardIds;
    protected $_name = [
        'endpoint' => 'endpoint',
        'modelCardIds' => 'modelCardIds',
    ];

    public function validate()
    {
        if (\is_array($this->modelCardIds)) {
            Model::validateArray($this->modelCardIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->modelCardIds) {
            if (\is_array($this->modelCardIds)) {
                $res['modelCardIds'] = [];
                $n1 = 0;
                foreach ($this->modelCardIds as $item1) {
                    $res['modelCardIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['modelCardIds'])) {
            if (!empty($map['modelCardIds'])) {
                $model->modelCardIds = [];
                $n1 = 0;
                foreach ($map['modelCardIds'] as $item1) {
                    $model->modelCardIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
