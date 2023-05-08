<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskTypeResponseBody\riskTypes;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskTypeResponseBody\riskTypes\subTypes\checkDetails;
use AlibabaCloud\Tea\Model;

class subTypes extends Model
{
    /**
     * @description The configuration type of the parameter. Valid values:
     *
     *   **1**: input
     *   **2**: selection
     *
     * @example Redis unauthorized access high exploit vulnerability risk
     *
     * @var string
     */
    public $alias;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @var checkDetails[]
     */
    public $checkDetails;

    /**
     * @description An array that consists of the check details about the baseline subtype.
     *
     * @example hc_exploit_redis
     *
     * @var string
     */
    public $typeName;
    protected $_name = [
        'alias'        => 'Alias',
        'checkDetails' => 'CheckDetails',
        'typeName'     => 'TypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->checkDetails) {
            $res['CheckDetails'] = [];
            if (null !== $this->checkDetails && \is_array($this->checkDetails)) {
                $n = 0;
                foreach ($this->checkDetails as $item) {
                    $res['CheckDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['CheckDetails'])) {
            if (!empty($map['CheckDetails'])) {
                $model->checkDetails = [];
                $n                   = 0;
                foreach ($map['CheckDetails'] as $item) {
                    $model->checkDetails[$n++] = null !== $item ? checkDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
