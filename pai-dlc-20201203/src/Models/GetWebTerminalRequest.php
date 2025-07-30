<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetWebTerminalRequest extends Model
{
    /**
     * @description Specifies whether to create a shareable link to access the container. Valid values:
     *
     *   true: returns a shareable link to access the container. The link will expire after 30 seconds and can only be used once. After you access the container by using the link, other requests that use this link to access the container become invalid.
     *   false: returns a common shareable link to access the container. If you use a common shareable link to access a container, Alibaba Cloud identity authentication is required. The link will expire after 30 seconds.
     *
     * @example true
     *
     * @var bool
     */
    public $isShared;

    /**
     * @description The pod UID.
     *
     * @example 94a7cc7c-0033-48b5-85bd-71c63592c268
     *
     * @var string
     */
    public $podUid;
    protected $_name = [
        'isShared' => 'IsShared',
        'podUid' => 'PodUid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->isShared) {
            $res['IsShared'] = $this->isShared;
        }
        if (null !== $this->podUid) {
            $res['PodUid'] = $this->podUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWebTerminalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsShared'])) {
            $model->isShared = $map['IsShared'];
        }
        if (isset($map['PodUid'])) {
            $model->podUid = $map['PodUid'];
        }

        return $model;
    }
}
