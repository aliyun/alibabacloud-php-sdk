<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20161111\Models;

use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListParentsResponseBody\folders;
use AlibabaCloud\Tea\Model;

class ListParentsResponseBody extends Model
{
    /**
     * @var folders
     */
    public $folders;

    /**
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
     * @return ListParentsResponseBody
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
