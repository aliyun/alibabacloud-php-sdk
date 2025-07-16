<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetAssistantCapabilityHeaders extends Model
{
    public $commonHeaders;

    /**
     * @example 123456
     *
     * @var string
     */
    public $accountId;
    protected $_name = [
        'accountId' => 'accountId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAssistantCapabilityHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        return $model;
    }
}
