<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody\summarys\standards;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody\summarys\typeStatistic;
use AlibabaCloud\Tea\Model;

class summarys extends Model
{
    /**
     * @description The number of detected risk items.
     *
     * @example 5
     *
     * @var int
     */
    public $failCount;

    /**
     * @description The number of check items that pass the check.
     *
     * @example 10
     *
     * @var int
     */
    public $passCount;

    /**
     * @description The information about the check items.
     *
     * @var standards[]
     */
    public $standards;

    /**
     * @description The type of the check item. Valid values:
     *
     *   **COMPLIANCE**: compliance
     *   **RISK**: security risk
     *   **IDENTITY_PERMISSION**: identity and permission
     *
     * @example IDENTITY_PERMISSION
     *
     * @var string
     */
    public $type;

    /**
     * @description The risk statistics by type.
     *
     * @var typeStatistic
     */
    public $typeStatistic;
    protected $_name = [
        'failCount'     => 'FailCount',
        'passCount'     => 'PassCount',
        'standards'     => 'Standards',
        'type'          => 'Type',
        'typeStatistic' => 'TypeStatistic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->passCount) {
            $res['PassCount'] = $this->passCount;
        }
        if (null !== $this->standards) {
            $res['Standards'] = [];
            if (null !== $this->standards && \is_array($this->standards)) {
                $n = 0;
                foreach ($this->standards as $item) {
                    $res['Standards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->typeStatistic) {
            $res['TypeStatistic'] = null !== $this->typeStatistic ? $this->typeStatistic->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summarys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['PassCount'])) {
            $model->passCount = $map['PassCount'];
        }
        if (isset($map['Standards'])) {
            if (!empty($map['Standards'])) {
                $model->standards = [];
                $n                = 0;
                foreach ($map['Standards'] as $item) {
                    $model->standards[$n++] = null !== $item ? standards::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TypeStatistic'])) {
            $model->typeStatistic = typeStatistic::fromMap($map['TypeStatistic']);
        }

        return $model;
    }
}
