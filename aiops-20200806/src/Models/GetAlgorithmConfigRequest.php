<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class GetAlgorithmConfigRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmTypeCode;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'algorithmTypeCode' => 'AlgorithmTypeCode',
        'operaUid'          => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmTypeCode) {
            $res['AlgorithmTypeCode'] = $this->algorithmTypeCode;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlgorithmConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmTypeCode'])) {
            $model->algorithmTypeCode = $map['AlgorithmTypeCode'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
