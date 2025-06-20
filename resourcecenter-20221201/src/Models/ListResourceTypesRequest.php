<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Dara\Model;

class ListResourceTypesRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string[]
     */
    public $query;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'query' => 'Query',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        if (\is_array($this->query)) {
            Model::validateArray($this->query);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->query) {
            if (\is_array($this->query)) {
                $res['Query'] = [];
                $n1 = 0;
                foreach ($this->query as $item1) {
                    $res['Query'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['Query'])) {
            if (!empty($map['Query'])) {
                $model->query = [];
                $n1 = 0;
                foreach ($map['Query'] as $item1) {
                    $model->query[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
