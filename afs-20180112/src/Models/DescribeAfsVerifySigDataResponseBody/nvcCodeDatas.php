<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsVerifySigDataResponseBody;

use AlibabaCloud\Tea\Model;

class nvcCodeDatas extends Model
{
    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $nvcCode400;

    /**
     * @var int
     */
    public $nvcCode200;

    /**
     * @var int
     */
    public $nvcCode800;

    /**
     * @var int
     */
    public $nvcCode600;
    protected $_name = [
        'time'       => 'Time',
        'nvcCode400' => 'NvcCode400',
        'nvcCode200' => 'NvcCode200',
        'nvcCode800' => 'NvcCode800',
        'nvcCode600' => 'NvcCode600',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->nvcCode400) {
            $res['NvcCode400'] = $this->nvcCode400;
        }
        if (null !== $this->nvcCode200) {
            $res['NvcCode200'] = $this->nvcCode200;
        }
        if (null !== $this->nvcCode800) {
            $res['NvcCode800'] = $this->nvcCode800;
        }
        if (null !== $this->nvcCode600) {
            $res['NvcCode600'] = $this->nvcCode600;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nvcCodeDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['NvcCode400'])) {
            $model->nvcCode400 = $map['NvcCode400'];
        }
        if (isset($map['NvcCode200'])) {
            $model->nvcCode200 = $map['NvcCode200'];
        }
        if (isset($map['NvcCode800'])) {
            $model->nvcCode800 = $map['NvcCode800'];
        }
        if (isset($map['NvcCode600'])) {
            $model->nvcCode600 = $map['NvcCode600'];
        }

        return $model;
    }
}
