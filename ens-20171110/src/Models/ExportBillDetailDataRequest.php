<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ExportBillDetailDataRequest extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $endDate;
    protected $_name = [
        'version'   => 'Version',
        'startDate' => 'StartDate',
        'endDate'   => 'EndDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportBillDetailDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        return $model;
    }
}
