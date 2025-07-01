<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetDirectoryOrFilePropertiesResponseBody\entry;

class GetDirectoryOrFilePropertiesResponseBody extends Model
{
    /**
     * @var entry
     */
    public $entry;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'entry' => 'Entry',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->entry) {
            $this->entry->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entry) {
            $res['Entry'] = null !== $this->entry ? $this->entry->toArray($noStream) : $this->entry;
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
        if (isset($map['Entry'])) {
            $model->entry = entry::fromMap($map['Entry']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
