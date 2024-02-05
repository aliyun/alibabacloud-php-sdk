<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSearchKeywordHeaders;

use AlibabaCloud\Tea\Model;

class accountContext extends Model
{
    /**
     * @example ba3a9b612345678d8fedf544ef69d19e
     *
     * @var string
     */
    public $userToken;
    protected $_name = [
        'userToken' => 'userToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userToken) {
            $res['userToken'] = $this->userToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['userToken'])) {
            $model->userToken = $map['userToken'];
        }

        return $model;
    }
}
