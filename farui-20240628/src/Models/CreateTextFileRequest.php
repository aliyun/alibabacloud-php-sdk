<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models;

use AlibabaCloud\Dara\Model;

class CreateTextFileRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $contractId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $textFileName;

    /**
     * @var string
     */
    public $textFileUrl;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'contractId' => 'ContractId',
        'createTime' => 'CreateTime',
        'textFileName' => 'TextFileName',
        'textFileUrl' => 'TextFileUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->contractId) {
            $res['ContractId'] = $this->contractId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->textFileName) {
            $res['TextFileName'] = $this->textFileName;
        }

        if (null !== $this->textFileUrl) {
            $res['TextFileUrl'] = $this->textFileUrl;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ContractId'])) {
            $model->contractId = $map['ContractId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['TextFileName'])) {
            $model->textFileName = $map['TextFileName'];
        }

        if (isset($map['TextFileUrl'])) {
            $model->textFileUrl = $map['TextFileUrl'];
        }

        return $model;
    }
}
