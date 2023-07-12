<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalPropertyDataResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalPropertyDataResponse\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $nextValid;

    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var list_
     */
    public $list;
    protected $_name = [
        'nextValid'     => 'NextValid',
        'nextPageToken' => 'nextPageToken',
        'list'          => 'List',
    ];

    public function validate()
    {
        Model::validateRequired('nextValid', $this->nextValid, true);
        Model::validateRequired('nextPageToken', $this->nextPageToken, true);
        Model::validateRequired('list', $this->list, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextValid) {
            $res['NextValid'] = $this->nextValid;
        }
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
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
        if (isset($map['NextValid'])) {
            $model->nextValid = $map['NextValid'];
        }
        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }
        if (isset($map['List'])) {
            $model->list = list_::fromMap($map['List']);
        }

        return $model;
    }
}
