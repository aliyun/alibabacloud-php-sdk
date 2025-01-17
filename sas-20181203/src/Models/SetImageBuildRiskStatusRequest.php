<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class SetImageBuildRiskStatusRequest extends Model
{
    /**
     * @var string
     */
    public $imageUuids;
    /**
     * @var string
     */
    public $riskKey;
    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'imageUuids' => 'ImageUuids',
        'riskKey'    => 'RiskKey',
        'status'     => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageUuids) {
            $res['ImageUuids'] = $this->imageUuids;
        }

        if (null !== $this->riskKey) {
            $res['RiskKey'] = $this->riskKey;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ImageUuids'])) {
            $model->imageUuids = $map['ImageUuids'];
        }

        if (isset($map['RiskKey'])) {
            $model->riskKey = $map['RiskKey'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
