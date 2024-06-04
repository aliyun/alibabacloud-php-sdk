<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecSensitiveDomainStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $apiCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $domainCount;

    /**
     * @example 10
     *
     * @var string
     */
    public $sensitiveCode;

    /**
     * @example L3
     *
     * @var string
     */
    public $sensitiveLevel;

    /**
     * @var string
     */
    public $sensitiveName;
    protected $_name = [
        'apiCount'       => 'ApiCount',
        'domainCount'    => 'DomainCount',
        'sensitiveCode'  => 'SensitiveCode',
        'sensitiveLevel' => 'SensitiveLevel',
        'sensitiveName'  => 'SensitiveName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiCount) {
            $res['ApiCount'] = $this->apiCount;
        }
        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
        }
        if (null !== $this->sensitiveCode) {
            $res['SensitiveCode'] = $this->sensitiveCode;
        }
        if (null !== $this->sensitiveLevel) {
            $res['SensitiveLevel'] = $this->sensitiveLevel;
        }
        if (null !== $this->sensitiveName) {
            $res['SensitiveName'] = $this->sensitiveName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiCount'])) {
            $model->apiCount = $map['ApiCount'];
        }
        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }
        if (isset($map['SensitiveCode'])) {
            $model->sensitiveCode = $map['SensitiveCode'];
        }
        if (isset($map['SensitiveLevel'])) {
            $model->sensitiveLevel = $map['SensitiveLevel'];
        }
        if (isset($map['SensitiveName'])) {
            $model->sensitiveName = $map['SensitiveName'];
        }

        return $model;
    }
}
