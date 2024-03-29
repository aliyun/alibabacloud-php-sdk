<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sasti\V20200512\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainReportRequest extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example ThreatTypes,Intelligences,AttackPreferenceTop5,AttackCntByThreatType
     *
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $serviceLang;
    protected $_name = [
        'domain'      => 'Domain',
        'field'       => 'Field',
        'serviceLang' => 'ServiceLang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->serviceLang) {
            $res['ServiceLang'] = $this->serviceLang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['ServiceLang'])) {
            $model->serviceLang = $map['ServiceLang'];
        }

        return $model;
    }
}
