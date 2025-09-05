<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponseBody\data\personInfo\cellPhone;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponseBody\data\personInfo\earPhone;

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
     * @var int
     */
    public $personNumber;
    protected $_name = [
        'cellPhone' => 'CellPhone',
        'earPhone' => 'EarPhone',
        'personNumber' => 'PersonNumber',
    ];

    public function validate()
    {
        if (null !== $this->cellPhone) {
            $this->cellPhone->validate();
        }
        if (null !== $this->earPhone) {
            $this->earPhone->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cellPhone) {
            $res['CellPhone'] = null !== $this->cellPhone ? $this->cellPhone->toArray($noStream) : $this->cellPhone;
        }

        if (null !== $this->earPhone) {
            $res['EarPhone'] = null !== $this->earPhone ? $this->earPhone->toArray($noStream) : $this->earPhone;
        }

        if (null !== $this->personNumber) {
            $res['PersonNumber'] = $this->personNumber;
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
