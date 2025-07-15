<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\AddPlaylistItemsResponseBody\items;
use AlibabaCloud\Tea\Model;

class AddPlaylistItemsResponseBody extends Model
{
    /**
     * @description The information about the episodes.
     *
     * @var items
     */
    public $items;

    /**
     * @description The ID of the episode list. You can use the ID as a request parameter in the API operation that is used to remove episodes, query episodes, edit an episode list, delete an episode list, query the information about an episode list, start playing an episode list, or stop playing an episode list.
     *
     * @example 445409ec-7eaa-461d-8f29-4bec2eb9****
     *
     * @var string
     */
    public $programId;

    /**
     * @description The request ID.
     *
     * @example 5c6a2a0d-f228-4a64-af62-20e91b96****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'items' => 'Items',
        'programId' => 'ProgramId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPlaylistItemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['ProgramId'])) {
            $model->programId = $map['ProgramId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
