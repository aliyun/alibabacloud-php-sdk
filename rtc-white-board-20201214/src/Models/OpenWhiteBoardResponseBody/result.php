<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\OpenWhiteBoardResponseBody;

use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\OpenWhiteBoardResponseBody\result\documentAccessInfo;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var documentAccessInfo
     */
    public $documentAccessInfo;
    protected $_name = [
        'documentAccessInfo' => 'DocumentAccessInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentAccessInfo) {
            $res['DocumentAccessInfo'] = null !== $this->documentAccessInfo ? $this->documentAccessInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocumentAccessInfo'])) {
            $model->documentAccessInfo = documentAccessInfo::fromMap($map['DocumentAccessInfo']);
        }

        return $model;
    }
}
