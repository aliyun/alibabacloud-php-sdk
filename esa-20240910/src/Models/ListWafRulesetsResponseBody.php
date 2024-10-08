<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafRulesetsResponseBody\rulesets;
use AlibabaCloud\Tea\Model;

class ListWafRulesetsResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $instanceUsage;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Id of the request
     *
     * @example 36af3fcc-43d0-441c-86b1-428951dc8225
     *
     * @var string
     */
    public $requestId;

    /**
     * @var rulesets[]
     */
    public $rulesets;

    /**
     * @example 5
     *
     * @var int
     */
    public $siteUsage;

    /**
     * @example 5
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'instanceUsage' => 'InstanceUsage',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'rulesets'      => 'Rulesets',
        'siteUsage'     => 'SiteUsage',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceUsage) {
            $res['InstanceUsage'] = $this->instanceUsage;
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
        if (null !== $this->rulesets) {
            $res['Rulesets'] = [];
            if (null !== $this->rulesets && \is_array($this->rulesets)) {
                $n = 0;
                foreach ($this->rulesets as $item) {
                    $res['Rulesets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->siteUsage) {
            $res['SiteUsage'] = $this->siteUsage;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWafRulesetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceUsage'])) {
            $model->instanceUsage = $map['InstanceUsage'];
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
        if (isset($map['Rulesets'])) {
            if (!empty($map['Rulesets'])) {
                $model->rulesets = [];
                $n               = 0;
                foreach ($map['Rulesets'] as $item) {
                    $model->rulesets[$n++] = null !== $item ? rulesets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SiteUsage'])) {
            $model->siteUsage = $map['SiteUsage'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
