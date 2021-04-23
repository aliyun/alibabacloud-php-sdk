<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\EditPlaylistResponseBody\items;
use AlibabaCloud\Tea\Model;

class EditPlaylistResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var items
     */
    public $items;

    /**
     * @var string
     */
    public $programId;

    /**
     * @var string
     */
    public $casterId;
    protected $_name = [
        'requestId' => 'RequestId',
        'items'     => 'Items',
        'programId' => 'ProgramId',
        'casterId'  => 'CasterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditPlaylistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['ProgramId'])) {
            $model->programId = $map['ProgramId'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

        return $model;
    }
}
