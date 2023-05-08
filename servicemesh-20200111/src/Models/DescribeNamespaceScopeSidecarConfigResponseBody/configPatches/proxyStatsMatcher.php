<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches;

use AlibabaCloud\Tea\Model;

class proxyStatsMatcher extends Model
{
    /**
     * @description The prefix of the monitoring metrics for data collected by Envoy proxies.
     *
     * @var string[]
     */
    public $inclusionPrefixes;

    /**
     * @description The regular expression of the monitoring metrics for data collected by Envoy proxies.
     *
     * @var string[]
     */
    public $inclusionRegexps;

    /**
     * @description The suffix of the monitoring metrics for data collected by Envoy proxies.
     *
     * @var string[]
     */
    public $inclusionSuffixes;
    protected $_name = [
        'inclusionPrefixes' => 'InclusionPrefixes',
        'inclusionRegexps'  => 'InclusionRegexps',
        'inclusionSuffixes' => 'InclusionSuffixes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inclusionPrefixes) {
            $res['InclusionPrefixes'] = $this->inclusionPrefixes;
        }
        if (null !== $this->inclusionRegexps) {
            $res['InclusionRegexps'] = $this->inclusionRegexps;
        }
        if (null !== $this->inclusionSuffixes) {
            $res['InclusionSuffixes'] = $this->inclusionSuffixes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return proxyStatsMatcher
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InclusionPrefixes'])) {
            if (!empty($map['InclusionPrefixes'])) {
                $model->inclusionPrefixes = $map['InclusionPrefixes'];
            }
        }
        if (isset($map['InclusionRegexps'])) {
            if (!empty($map['InclusionRegexps'])) {
                $model->inclusionRegexps = $map['InclusionRegexps'];
            }
        }
        if (isset($map['InclusionSuffixes'])) {
            if (!empty($map['InclusionSuffixes'])) {
                $model->inclusionSuffixes = $map['InclusionSuffixes'];
            }
        }

        return $model;
    }
}
