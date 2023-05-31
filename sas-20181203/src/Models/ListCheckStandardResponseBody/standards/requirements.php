<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckStandardResponseBody\standards;

use AlibabaCloud\Tea\Model;

class requirements extends Model
{
    /**
     * @description The ID of the search condition.
     *
     * @example 11
     *
     * @var int
     */
    public $id;

    /**
     * @description The number of check items queried by using the search condition.
     *
     * @example 10
     *
     * @var int
     */
    public $riskCheckCount;

    /**
     * @description The display name of the search condition.
     *
     * @example RAM identity authentication
     *
     * @var string
     */
    public $showName;
    protected $_name = [
        'id'             => 'Id',
        'riskCheckCount' => 'RiskCheckCount',
        'showName'       => 'ShowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->riskCheckCount) {
            $res['RiskCheckCount'] = $this->riskCheckCount;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requirements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RiskCheckCount'])) {
            $model->riskCheckCount = $map['RiskCheckCount'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        return $model;
    }
}
