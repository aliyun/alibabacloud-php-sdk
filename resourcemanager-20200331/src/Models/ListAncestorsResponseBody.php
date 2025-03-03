<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAncestorsResponseBody\folders;

class ListAncestorsResponseBody extends Model
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
        if (null !== $this->folders) {
            $this->folders->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->folders) {
            $res['Folders'] = null !== $this->folders ? $this->folders->toArray($noStream) : $this->folders;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Folders'])) {
            $model->folders = folders::fromMap($map['Folders']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
