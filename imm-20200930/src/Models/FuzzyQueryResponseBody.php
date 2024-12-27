<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class FuzzyQueryResponseBody extends Model
{
    /**
     * @description The files.
     *
     * @var File[]
     */
    public $files;

    /**
     * @description A pagination token.
     *
     * This parameter is required.
     * @example MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 1B3D5E0A-D8B8-4DA0-8127-ED32C851****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of hits.
     *
     * @var int
     */
    public $totalHits;
    protected $_name = [
        'files'     => 'Files',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalHits' => 'TotalHits',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->files) {
            $res['Files'] = [];
            if (null !== $this->files && \is_array($this->files)) {
                $n = 0;
                foreach ($this->files as $item) {
                    $res['Files'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalHits) {
            $res['TotalHits'] = $this->totalHits;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FuzzyQueryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n            = 0;
                foreach ($map['Files'] as $item) {
                    $model->files[$n++] = null !== $item ? File::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalHits'])) {
            $model->totalHits = $map['TotalHits'];
        }

        return $model;
    }
}
