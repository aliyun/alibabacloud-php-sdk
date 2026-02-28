<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicesHotStorageDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicesHotStorageDataResponseBody\data\list_;

class data extends Model
{
    /**
     * @var list_
     */
    public $list;

    /**
     * @var bool
     */
    public $nextValid;

    /**
     * @var string
     */
    public $nextPageToken;
    protected $_name = [
        'list' => 'List',
        'nextValid' => 'NextValid',
        'nextPageToken' => 'nextPageToken',
    ];

    public function validate()
    {
        if (null !== $this->list) {
            $this->list->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toArray($noStream) : $this->list;
        }

        if (null !== $this->nextValid) {
            $res['NextValid'] = $this->nextValid;
        }

        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
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
        if (isset($map['List'])) {
            $model->list = list_::fromMap($map['List']);
        }

        if (isset($map['NextValid'])) {
            $model->nextValid = $map['NextValid'];
        }

        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }

        return $model;
    }
}
