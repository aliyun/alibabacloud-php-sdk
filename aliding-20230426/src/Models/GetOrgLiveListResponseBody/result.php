<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgLiveListResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgLiveListResponseBody\result\newLive;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgLiveListResponseBody\result\updateLive;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 新建的直播列表
     *
     * @var newLive
     */
    public $newLive;

    /**
     * @example 修改的直播列表
     *
     * @var updateLive
     */
    public $updateLive;
    protected $_name = [
        'newLive' => 'NewLive',
        'updateLive' => 'UpdateLive',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->newLive) {
            $res['NewLive'] = null !== $this->newLive ? $this->newLive->toMap() : null;
        }
        if (null !== $this->updateLive) {
            $res['UpdateLive'] = null !== $this->updateLive ? $this->updateLive->toMap() : null;
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
        if (isset($map['NewLive'])) {
            $model->newLive = newLive::fromMap($map['NewLive']);
        }
        if (isset($map['UpdateLive'])) {
            $model->updateLive = updateLive::fromMap($map['UpdateLive']);
        }

        return $model;
    }
}
