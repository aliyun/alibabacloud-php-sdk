<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\AuditItemSubmitRequest;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $customResult;

    /**
     * @var string
     */
    public $customRiskType;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'customResult'   => 'CustomResult',
        'customRiskType' => 'CustomRiskType',
        'id'             => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customResult) {
            $res['CustomResult'] = $this->customResult;
        }
        if (null !== $this->customRiskType) {
            $res['CustomRiskType'] = $this->customRiskType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['CustomResult'])) {
            $model->customResult = $map['CustomResult'];
        }
        if (isset($map['CustomRiskType'])) {
            $model->customRiskType = $map['CustomRiskType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
