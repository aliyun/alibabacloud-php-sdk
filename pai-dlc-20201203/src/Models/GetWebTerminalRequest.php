<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetWebTerminalRequest extends Model
{
    /**
     * @var bool
     */
    public $isShared;

    /**
     * @description Pod UID。
     *
     * @example 94a7cc7c-0033-48b5-85bd-71c63592c268
     *
     * @var string
     */
    public $podUid;
    protected $_name = [
        'isShared' => 'IsShared',
        'podUid'   => 'PodUid',
    ];

    public function validate()
    {
    }

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
