<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\Dara\Model;

class DescribeLabSessionRequest extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $labSessionId;

    /**
     * @var int
     */
    public $ramAccountId;
    protected $_name = [
        'accountId' => 'AccountId',
        'labSessionId' => 'LabSessionId',
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

        if (null !== $this->labSessionId) {
            $res['LabSessionId'] = $this->labSessionId;
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

        if (isset($map['LabSessionId'])) {
            $model->labSessionId = $map['LabSessionId'];
        }

        if (isset($map['RamAccountId'])) {
            $model->ramAccountId = $map['RamAccountId'];
        }

        return $model;
    }
}
