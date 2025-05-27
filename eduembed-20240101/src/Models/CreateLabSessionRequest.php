<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\Dara\Model;

class CreateLabSessionRequest extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $labId;

    /**
     * @var int
     */
    public $ramAccountId;
    protected $_name = [
        'accountId' => 'AccountId',
        'labId' => 'LabId',
        'ramAccountId' => 'RamAccountId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->labId) {
            $res['LabId'] = $this->labId;
        }

        if (null !== $this->ramAccountId) {
            $res['RamAccountId'] = $this->ramAccountId;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['LabId'])) {
            $model->labId = $map['LabId'];
        }

        if (isset($map['RamAccountId'])) {
            $model->ramAccountId = $map['RamAccountId'];
        }

        return $model;
    }
}
