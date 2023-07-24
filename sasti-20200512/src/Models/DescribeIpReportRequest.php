<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sasti\V20200512\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpReportRequest extends Model
{
    /**
     * @example TagsThreatTypes,Intelligences,AttackPreferenceTop5,AttackCntByThreatType
     *
     * @var string
     */
    public $field;

    /**
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $serviceLang;
    protected $_name = [
        'field'       => 'Field',
        'ip'          => 'Ip',
        'serviceLang' => 'ServiceLang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->serviceLang) {
            $res['ServiceLang'] = $this->serviceLang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['ServiceLang'])) {
            $model->serviceLang = $map['ServiceLang'];
        }

        return $model;
    }
}
