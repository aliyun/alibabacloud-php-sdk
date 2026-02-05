<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class MultimodalSearchBody extends Model
{
    /**
     * @var mixed[]
     */
    public $advancedParams;

    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'advancedParams' => 'advancedParams',
        'query' => 'query',
    ];

    public function validate()
    {
        if (\is_array($this->advancedParams)) {
            Model::validateArray($this->advancedParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedParams) {
            if (\is_array($this->advancedParams)) {
                $res['advancedParams'] = [];
                foreach ($this->advancedParams as $key1 => $value1) {
                    $res['advancedParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
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
        if (isset($map['advancedParams'])) {
            if (!empty($map['advancedParams'])) {
                $model->advancedParams = [];
                foreach ($map['advancedParams'] as $key1 => $value1) {
                    $model->advancedParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        return $model;
    }
}
