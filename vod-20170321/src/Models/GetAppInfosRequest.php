<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetAppInfosRequest extends Model
{
    /**
     * @var int
     */
    public $resourceRealOwnerId;

    /**
     * @var string
     */
    public $appIds;
    protected $_name = [
        'resourceRealOwnerId' => 'ResourceRealOwnerId',
        'appIds'              => 'AppIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceRealOwnerId) {
            $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        }
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceRealOwnerId'])) {
            $model->resourceRealOwnerId = $map['ResourceRealOwnerId'];
        }
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }

        return $model;
    }
}
