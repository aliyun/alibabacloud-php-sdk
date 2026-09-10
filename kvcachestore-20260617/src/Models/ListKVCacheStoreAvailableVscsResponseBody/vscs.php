<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kvcachestore\V20260617\Models\ListKVCacheStoreAvailableVscsResponseBody;

use AlibabaCloud\Dara\Model;

class vscs extends Model
{
    /**
     * @var string
     */
    public $vscId;

    /**
     * @var string
     */
    public $vscStatus;
    protected $_name = [
        'vscId' => 'VscId',
        'vscStatus' => 'VscStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vscId) {
            $res['VscId'] = $this->vscId;
        }

        if (null !== $this->vscStatus) {
            $res['VscStatus'] = $this->vscStatus;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VscId'])) {
            $model->vscId = $map['VscId'];
        }

        if (isset($map['VscStatus'])) {
            $model->vscStatus = $map['VscStatus'];
        }

        return $model;
    }
}
