<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeWeb3RiskScoreResponseBody\data;

use AlibabaCloud\Tea\Model;

class riskResults extends Model
{
    /**
     * @description description
     *
     * @example incoming address risk critical xxxxxx
     *
     * @var string
     */
    public $description;

    /**
     * @description [ CRITICAL, HIGH, MEDIUM, LOW, NO ]
     * 0: No risk
     * @example HIGH
     *
     * @var string
     */
    public $severity;

    /**
     * @description Address
     * Transaction
     * @example Address
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'severity'    => 'Severity',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
