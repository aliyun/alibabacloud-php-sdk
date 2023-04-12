<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListPreManagedRulesResponseBody\managedRules;
use AlibabaCloud\Tea\Model;

class ListPreManagedRulesResponseBody extends Model
{
    /**
     * @description The evaluation rules.
     *
     * @var managedRules[]
     */
    public $managedRules;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example A2A9F1BE-0712-1B26-9899-D82F7DA8476C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'managedRules' => 'ManagedRules',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->managedRules) {
            $res['ManagedRules'] = [];
            if (null !== $this->managedRules && \is_array($this->managedRules)) {
                $n = 0;
                foreach ($this->managedRules as $item) {
                    $res['ManagedRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPreManagedRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ManagedRules'])) {
            if (!empty($map['ManagedRules'])) {
                $model->managedRules = [];
                $n                   = 0;
                foreach ($map['ManagedRules'] as $item) {
                    $model->managedRules[$n++] = null !== $item ? managedRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
