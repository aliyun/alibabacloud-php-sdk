<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class GetAccountRequest extends Model
{
    /**
     * @description The Alibaba Cloud account ID of the member.
     *
     * @example 181761095690****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description Specifies whether to return the information of tags. Valid values:
     *
     *   false (default value)
     *   true
     *
     * @example true
     *
     * @var bool
     */
    public $includeTags;
    protected $_name = [
        'accountId'   => 'AccountId',
        'includeTags' => 'IncludeTags',
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
        if (null !== $this->includeTags) {
            $res['IncludeTags'] = $this->includeTags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['IncludeTags'])) {
            $model->includeTags = $map['IncludeTags'];
        }

        return $model;
    }
}
