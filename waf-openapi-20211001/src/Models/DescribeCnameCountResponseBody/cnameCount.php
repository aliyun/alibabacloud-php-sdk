<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCnameCountResponseBody;

use AlibabaCloud\Tea\Model;

class cnameCount extends Model
{
    /**
     * @description The number of domain names that are added to WAF in CNAME record mode.
     *
     * @example 1
     *
     * @var int
     */
    public $cname;

    /**
     * @description The number of domain names that are added to WAF in hybrid cloud reverse proxy mode.
     *
     * @example 1
     *
     * @var int
     */
    public $hybridCloudCname;

    /**
     * @description The total number of domain names that are added to WAF in CNAME record mode and hybrid cloud reverse proxy mode.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'cname'            => 'Cname',
        'hybridCloudCname' => 'HybridCloudCname',
        'total'            => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->hybridCloudCname) {
            $res['HybridCloudCname'] = $this->hybridCloudCname;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cnameCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['HybridCloudCname'])) {
            $model->hybridCloudCname = $map['HybridCloudCname'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
