<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataSourceSharedRulesResponseBody\dataSourceSharedRules;

class ListDataSourceSharedRulesResponseBody extends Model
{
    /**
     * @var dataSourceSharedRules[]
     */
    public $dataSourceSharedRules;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataSourceSharedRules' => 'DataSourceSharedRules',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dataSourceSharedRules)) {
            Model::validateArray($this->dataSourceSharedRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceSharedRules) {
            if (\is_array($this->dataSourceSharedRules)) {
                $res['DataSourceSharedRules'] = [];
                $n1 = 0;
                foreach ($this->dataSourceSharedRules as $item1) {
                    $res['DataSourceSharedRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataSourceSharedRules'])) {
            if (!empty($map['DataSourceSharedRules'])) {
                $model->dataSourceSharedRules = [];
                $n1 = 0;
                foreach ($map['DataSourceSharedRules'] as $item1) {
                    $model->dataSourceSharedRules[$n1] = dataSourceSharedRules::fromMap($item1);
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
