<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAncestorsResponseBody\folders;
use AlibabaCloud\Tea\Model;

class ListAncestorsResponseBody extends Model
{
    /**
     * @description The information of the folders.
     *
     * @var folders
     */
    public $folders;

    /**
     * @description The ID of the request.
     *
     * @example 83AFBEB6-DC03-406E-9686-867461FF6698
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'folders'   => 'Folders',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->folders) {
            $res['Folders'] = null !== $this->folders ? $this->folders->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAncestorsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Folders'])) {
            $model->folders = folders::fromMap($map['Folders']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
