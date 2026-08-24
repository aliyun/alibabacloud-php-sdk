<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kvcachestore\V20260617\Models;

use AlibabaCloud\Dara\Model;

class DeleteKVCacheStoreRequest extends Model
{
    /**
     * @var string
     */
    public $kvcsId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'kvcsId' => 'KvcsId',
        'regionId' => 'RegionId',
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
