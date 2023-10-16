<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class ListTrademarkSbjKeyRequest extends Model
{
    /**
     * @var string
     */
    public $principalKey;

    /**
     * @var string
     */
    public $principalName;
    protected $_name = [
        'principalKey'  => 'PrincipalKey',
        'principalName' => 'PrincipalName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->principalKey) {
            $res['PrincipalKey'] = $this->principalKey;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrademarkSbjKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrincipalKey'])) {
            $model->principalKey = $map['PrincipalKey'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }

        return $model;
    }
}
