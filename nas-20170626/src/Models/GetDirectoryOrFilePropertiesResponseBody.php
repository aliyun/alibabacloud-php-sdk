<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\GetDirectoryOrFilePropertiesResponseBody\entry;
use AlibabaCloud\Tea\Model;

class GetDirectoryOrFilePropertiesResponseBody extends Model
{
    /**
     * @description The details about the files or directories.
     *
     * @var entry
     */
    public $entry;

    /**
     * @description The request ID.
     *
     * @example 2D69A58F-345C-4FDE-88E4-BF518948****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'entry'     => 'Entry',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entry) {
            $res['Entry'] = null !== $this->entry ? $this->entry->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDirectoryOrFilePropertiesResponseBody
     */
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
