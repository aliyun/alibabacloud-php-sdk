<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\ListAllBizChainContractResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $contractName;

    /**
     * @var string
     */
    public $contractTemplateId;

    /**
     * @var string
     */
    public $invokeType;
    protected $_name = [
        'contractName' => 'ContractName',
        'contractTemplateId' => 'ContractTemplateId',
        'invokeType' => 'InvokeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contractName) {
            $res['ContractName'] = $this->contractName;
        }

        if (null !== $this->contractTemplateId) {
            $res['ContractTemplateId'] = $this->contractTemplateId;
        }

        if (null !== $this->invokeType) {
            $res['InvokeType'] = $this->invokeType;
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
        if (isset($map['ContractName'])) {
            $model->contractName = $map['ContractName'];
        }

        if (isset($map['ContractTemplateId'])) {
            $model->contractTemplateId = $map['ContractTemplateId'];
        }

        if (isset($map['InvokeType'])) {
            $model->invokeType = $map['InvokeType'];
        }

        return $model;
    }
}
