<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponseBody\data;

use AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponseBody\data\personInfo\cellPhone;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponseBody\data\personInfo\earPhone;
use AlibabaCloud\Tea\Model;

class personInfo extends Model
{
    /**
     * @var cellPhone
     */
    public $cellPhone;

    /**
     * @var earPhone
     */
    public $earPhone;

    /**
     * @example 1
     *
     * @var int
     */
    public $personNumber;
    protected $_name = [
        'cellPhone'    => 'CellPhone',
        'earPhone'     => 'EarPhone',
        'personNumber' => 'PersonNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cellPhone) {
            $res['CellPhone'] = null !== $this->cellPhone ? $this->cellPhone->toMap() : null;
        }
        if (null !== $this->earPhone) {
            $res['EarPhone'] = null !== $this->earPhone ? $this->earPhone->toMap() : null;
        }
        if (null !== $this->personNumber) {
            $res['PersonNumber'] = $this->personNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return personInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CellPhone'])) {
            $model->cellPhone = cellPhone::fromMap($map['CellPhone']);
        }
        if (isset($map['EarPhone'])) {
            $model->earPhone = earPhone::fromMap($map['EarPhone']);
        }
        if (isset($map['PersonNumber'])) {
            $model->personNumber = $map['PersonNumber'];
        }

        return $model;
    }
}
