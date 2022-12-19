<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskTypeResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskTypeResponseBody\riskTypes\subTypes;
use AlibabaCloud\Tea\Model;

class riskTypes extends Model
{
    /**
     * @description The alias of the baseline type.
     *
     * @example Redis unauthorized access high exploit vulnerability risk
     *
     * @var string
     */
    public $alias;

    /**
     * @description An array that consists of the information about baseline subtypes.
     *
     * @var subTypes[]
     */
    public $subTypes;

    /**
     * @description The name of the baseline type.
     *
     * @example hc_exploit
     *
     * @var string
     */
    public $typeName;
    protected $_name = [
        'alias'    => 'Alias',
        'subTypes' => 'SubTypes',
        'typeName' => 'TypeName',
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
        if (null !== $this->subTypes) {
            $res['SubTypes'] = [];
            if (null !== $this->subTypes && \is_array($this->subTypes)) {
                $n = 0;
                foreach ($this->subTypes as $item) {
                    $res['SubTypes'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return riskTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['SubTypes'])) {
            if (!empty($map['SubTypes'])) {
                $model->subTypes = [];
                $n               = 0;
                foreach ($map['SubTypes'] as $item) {
                    $model->subTypes[$n++] = null !== $item ? subTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
