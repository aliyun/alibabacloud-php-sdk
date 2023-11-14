<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeRisksRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The maximum number of entries to return. Default value: 20.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @description The baseline ID.
     *
     * >  You can call the [DescribeCheckWarningSummary](~~DescribeCheckWarningSummary~~) operation to query the baseline IDs.
     * @example 75
     *
     * @var int
     */
    public $riskId;

    /**
     * @description The name of the baseline.
     *
     * @example docker
     *
     * @var string
     */
    public $riskName;
    protected $_name = [
        'lang'                       => 'Lang',
        'limit'                      => 'Limit',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'riskId'                     => 'RiskId',
        'riskName'                   => 'RiskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }
        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRisksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }
        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }

        return $model;
    }
}
