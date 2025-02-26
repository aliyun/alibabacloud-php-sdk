<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCnameCountResponseBody;

use AlibabaCloud\Dara\Model;

class cnameCount extends Model
{
    /**
     * @var int
     */
    public $cname;
    /**
     * @var int
     */
    public $hybridCloudCname;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
