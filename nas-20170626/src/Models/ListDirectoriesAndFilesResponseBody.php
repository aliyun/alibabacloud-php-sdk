<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\ListDirectoriesAndFilesResponseBody\entries;
use AlibabaCloud\Tea\Model;

class ListDirectoriesAndFilesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var entries[]
     */
    public $entries;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'entries'   => 'Entries',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->entries) {
            $res['Entries'] = [];
            if (null !== $this->entries && \is_array($this->entries)) {
                $n = 0;
                foreach ($this->entries as $item) {
                    $res['Entries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDirectoriesAndFilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Entries'])) {
            if (!empty($map['Entries'])) {
                $model->entries = [];
                $n              = 0;
                foreach ($map['Entries'] as $item) {
                    $model->entries[$n++] = null !== $item ? entries::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
