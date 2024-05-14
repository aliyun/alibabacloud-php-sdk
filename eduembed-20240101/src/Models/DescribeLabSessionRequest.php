<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLabSessionRequest extends Model
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
     * @example 1
     *
     * @var string
     */
    public $labSessionId;

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
        'labSessionId' => 'LabSessionId',
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
        if (null !== $this->labSessionId) {
            $res['LabSessionId'] = $this->labSessionId;
        }
        if (null !== $this->ramAccountId) {
            $res['RamAccountId'] = $this->ramAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLabSessionRequest
     */
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
