<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcSeriousOffenseResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $entName;

    /**
     * @example 2017-11-02
     *
     * @var string
     */
    public $inDate;

    /**
     * @var string
     */
    public $inDepartment;

    /**
     * @var string
     */
    public $inReason;

    /**
     * @example 2018-08-15
     *
     * @var string
     */
    public $outDate;

    /**
     * @var string
     */
    public $outDepartment;

    /**
     * @var string
     */
    public $outReason;
    protected $_name = [
        'entName'       => 'EntName',
        'inDate'        => 'InDate',
        'inDepartment'  => 'InDepartment',
        'inReason'      => 'InReason',
        'outDate'       => 'OutDate',
        'outDepartment' => 'OutDepartment',
        'outReason'     => 'OutReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->inDate) {
            $res['InDate'] = $this->inDate;
        }
        if (null !== $this->inDepartment) {
            $res['InDepartment'] = $this->inDepartment;
        }
        if (null !== $this->inReason) {
            $res['InReason'] = $this->inReason;
        }
        if (null !== $this->outDate) {
            $res['OutDate'] = $this->outDate;
        }
        if (null !== $this->outDepartment) {
            $res['OutDepartment'] = $this->outDepartment;
        }
        if (null !== $this->outReason) {
            $res['OutReason'] = $this->outReason;
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
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['InDate'])) {
            $model->inDate = $map['InDate'];
        }
        if (isset($map['InDepartment'])) {
            $model->inDepartment = $map['InDepartment'];
        }
        if (isset($map['InReason'])) {
            $model->inReason = $map['InReason'];
        }
        if (isset($map['OutDate'])) {
            $model->outDate = $map['OutDate'];
        }
        if (isset($map['OutDepartment'])) {
            $model->outDepartment = $map['OutDepartment'];
        }
        if (isset($map['OutReason'])) {
            $model->outReason = $map['OutReason'];
        }

        return $model;
    }
}
