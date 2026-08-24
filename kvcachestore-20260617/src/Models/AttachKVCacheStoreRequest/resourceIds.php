<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kvcachestore\V20260617\Models\AttachKVCacheStoreRequest;

use AlibabaCloud\Dara\Model;

class resourceIds extends Model
{
    /**
     * @var string
     */
    public $kvcsId;

    /**
     * @var string
     */
    public $vscId;
    protected $_name = [
        'kvcsId' => 'KvcsId',
        'vscId' => 'VscId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kvcsId) {
            $res['KvcsId'] = $this->kvcsId;
        }

        if (null !== $this->vscId) {
            $res['VscId'] = $this->vscId;
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
        if (isset($map['KvcsId'])) {
            $model->kvcsId = $map['KvcsId'];
        }

        if (isset($map['VscId'])) {
            $model->vscId = $map['VscId'];
        }

        return $model;
    }
}
