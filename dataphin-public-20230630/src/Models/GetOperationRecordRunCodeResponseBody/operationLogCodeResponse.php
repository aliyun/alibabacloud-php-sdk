<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetOperationRecordRunCodeResponseBody;

use AlibabaCloud\Dara\Model;

class operationLogCodeResponse extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $operatorId;

    /**
     * @var string
     */
    public $operatorName;

    /**
     * @var int
     */
    public $sqlNum;
    protected $_name = [
        'code' => 'Code',
        'operatorId' => 'OperatorId',
        'operatorName' => 'OperatorName',
        'sqlNum' => 'SqlNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }

        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }

        if (null !== $this->sqlNum) {
            $res['SqlNum'] = $this->sqlNum;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }

        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }

        if (isset($map['SqlNum'])) {
            $model->sqlNum = $map['SqlNum'];
        }

        return $model;
    }
}
