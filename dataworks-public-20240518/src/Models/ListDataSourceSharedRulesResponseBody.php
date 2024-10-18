<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataSourceSharedRulesResponseBody\dataSourceSharedRules;
use AlibabaCloud\Tea\Model;

class ListDataSourceSharedRulesResponseBody extends Model
{
    /**
     * @var dataSourceSharedRules[]
     */
    public $dataSourceSharedRules;

    /**
     * @description Id of the request
     *
     * @example 0000-ABCD-EFG****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataSourceSharedRules' => 'DataSourceSharedRules',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceSharedRules) {
            $res['DataSourceSharedRules'] = [];
            if (null !== $this->dataSourceSharedRules && \is_array($this->dataSourceSharedRules)) {
                $n = 0;
                foreach ($this->dataSourceSharedRules as $item) {
                    $res['DataSourceSharedRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataSourceSharedRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceSharedRules'])) {
            if (!empty($map['DataSourceSharedRules'])) {
                $model->dataSourceSharedRules = [];
                $n                            = 0;
                foreach ($map['DataSourceSharedRules'] as $item) {
                    $model->dataSourceSharedRules[$n++] = null !== $item ? dataSourceSharedRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
