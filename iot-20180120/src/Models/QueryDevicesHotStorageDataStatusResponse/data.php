<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicesHotStorageDataStatusResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicesHotStorageDataStatusResponse\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var bool
     */
    public $nextValid;

    /**
     * @var list_
     */
    public $list;
    protected $_name = [
        'nextPageToken' => 'NextPageToken',
        'nextValid'     => 'NextValid',
        'list'          => 'List',
    ];

    public function validate()
    {
        Model::validateRequired('nextPageToken', $this->nextPageToken, true);
        Model::validateRequired('nextValid', $this->nextValid, true);
        Model::validateRequired('list', $this->list, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->nextValid) {
            $res['NextValid'] = $this->nextValid;
        }
        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['NextValid'])) {
            $model->nextValid = $map['NextValid'];
        }
        if (isset($map['List'])) {
            $model->list = list_::fromMap($map['List']);
        }

        return $model;
    }
}
