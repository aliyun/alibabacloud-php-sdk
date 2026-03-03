<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkEventHouseParameters\mappingRules;

class sinkEventHouseParameters extends Model
{
    /**
     * @var string
     */
    public $catalogName;

    /**
     * @var string
     */
    public $eventTableName;

    /**
     * @var mappingRules[]
     */
    public $mappingRules;

    /**
     * @var string
     */
    public $namespaceName;
    protected $_name = [
        'catalogName' => 'CatalogName',
        'eventTableName' => 'EventTableName',
        'mappingRules' => 'MappingRules',
        'namespaceName' => 'NamespaceName',
    ];

    public function validate()
    {
        if (\is_array($this->mappingRules)) {
            Model::validateArray($this->mappingRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }

        if (null !== $this->eventTableName) {
            $res['EventTableName'] = $this->eventTableName;
        }

        if (null !== $this->mappingRules) {
            if (\is_array($this->mappingRules)) {
                $res['MappingRules'] = [];
                $n1 = 0;
                foreach ($this->mappingRules as $item1) {
                    $res['MappingRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
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
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }

        if (isset($map['EventTableName'])) {
            $model->eventTableName = $map['EventTableName'];
        }

        if (isset($map['MappingRules'])) {
            if (!empty($map['MappingRules'])) {
                $model->mappingRules = [];
                $n1 = 0;
                foreach ($map['MappingRules'] as $item1) {
                    $model->mappingRules[$n1] = mappingRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }

        return $model;
    }
}
