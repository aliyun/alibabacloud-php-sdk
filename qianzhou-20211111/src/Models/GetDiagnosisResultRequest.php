<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qianzhou\V20211111\Models;

use AlibabaCloud\Tea\Model;

class GetDiagnosisResultRequest extends Model
{
    /**
     * @var string
     */
    public $diagnosisId;

    /**
     * @var string
     */
    public $ownerUid;
    protected $_name = [
        'diagnosisId' => 'diagnosisId',
        'ownerUid'    => 'ownerUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnosisId) {
            $res['diagnosisId'] = $this->diagnosisId;
        }
        if (null !== $this->ownerUid) {
            $res['ownerUid'] = $this->ownerUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDiagnosisResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['diagnosisId'])) {
            $model->diagnosisId = $map['diagnosisId'];
        }
        if (isset($map['ownerUid'])) {
            $model->ownerUid = $map['ownerUid'];
        }

        return $model;
    }
}
