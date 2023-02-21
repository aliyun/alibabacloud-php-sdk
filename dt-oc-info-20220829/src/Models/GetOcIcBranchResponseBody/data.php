<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcBranchResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $entName;

    /**
     * @var string
     */
    public $entStatus;

    /**
     * @example 2019-01-01
     *
     * @var string
     */
    public $esDate;

    /**
     * @var string
     */
    public $operName;
    protected $_name = [
        'entName'   => 'EntName',
        'entStatus' => 'EntStatus',
        'esDate'    => 'EsDate',
        'operName'  => 'OperName',
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
        if (null !== $this->entStatus) {
            $res['EntStatus'] = $this->entStatus;
        }
        if (null !== $this->esDate) {
            $res['EsDate'] = $this->esDate;
        }
        if (null !== $this->operName) {
            $res['OperName'] = $this->operName;
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
        if (isset($map['EntStatus'])) {
            $model->entStatus = $map['EntStatus'];
        }
        if (isset($map['EsDate'])) {
            $model->esDate = $map['EsDate'];
        }
        if (isset($map['OperName'])) {
            $model->operName = $map['OperName'];
        }

        return $model;
    }
}
