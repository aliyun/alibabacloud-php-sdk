<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\Tea\Model;

class CreateLabSessionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example -
     *
     * @var int
     */
    public $accountId;

    /**
     * @description This parameter is required.
     *
     * @example 875
     *
     * @var int
     */
    public $labId;

    /**
     * @description This parameter is required.
     *
     * @example -
     *
     * @var int
     */
    public $ramAccountId;
    protected $_name = [
        'accountId'    => 'AccountId',
        'labId'        => 'LabId',
        'ramAccountId' => 'RamAccountId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateLabSessionRequest
     */
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
