<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedCheckWarningResponseBody;

use AlibabaCloud\Dara\Model;

class warningList extends Model
{
    /**
     * @var int
     */
    public $riskId;

    /**
     * @var string
     */
    public $riskName;

    /**
     * @var string
     */
    public $subTypeAlias;

    /**
     * @var string
     */
    public $typeAlias;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'riskId' => 'RiskId',
        'riskName' => 'RiskName',
        'subTypeAlias' => 'SubTypeAlias',
        'typeAlias' => 'TypeAlias',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }

        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }

        if (null !== $this->subTypeAlias) {
            $res['SubTypeAlias'] = $this->subTypeAlias;
        }

        if (null !== $this->typeAlias) {
            $res['TypeAlias'] = $this->typeAlias;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }

        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }

        if (isset($map['SubTypeAlias'])) {
            $model->subTypeAlias = $map['SubTypeAlias'];
        }

        if (isset($map['TypeAlias'])) {
            $model->typeAlias = $map['TypeAlias'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
