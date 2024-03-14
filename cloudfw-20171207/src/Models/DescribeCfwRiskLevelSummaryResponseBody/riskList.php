<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeCfwRiskLevelSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class riskList extends Model
{
    /**
     * @description The risk levels. Valid values:
     *
     *   **medium**
     *
     * @example medium
     *
     * @var string
     */
    public $level;

    /**
     * @description The number of at-risk Elastic Compute Service (ECS) instances.
     *
     * @example 50
     *
     * @var string
     */
    public $num;

    /**
     * @description The type.
     *
     * @example ResourceNotProtected
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'level' => 'Level',
        'num'   => 'Num',
        'type'  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
