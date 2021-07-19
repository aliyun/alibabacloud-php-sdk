<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePatchesResponseBody\patches;
use AlibabaCloud\Tea\Model;

class ListInstancePatchesResponseBody extends Model
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
     * @var int
     */
    public $maxResults;

    /**
     * @var patches[]
     */
    public $patches;
    protected $_name = [
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'maxResults' => 'MaxResults',
        'patches'    => 'Patches',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->patches) {
            $res['Patches'] = [];
            if (null !== $this->patches && \is_array($this->patches)) {
                $n = 0;
                foreach ($this->patches as $item) {
                    $res['Patches'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancePatchesResponseBody
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Patches'])) {
            if (!empty($map['Patches'])) {
                $model->patches = [];
                $n              = 0;
                foreach ($map['Patches'] as $item) {
                    $model->patches[$n++] = null !== $item ? patches::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
