<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListBatchesResponseBody extends Model
{
    /**
     * @var DataIngestion[]
     */
    public $batches;

    /**
     * @example MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpw****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example FEDC9B1F-30F2-4C1F-8ED2-B7860187****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'batches'   => 'Batches',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batches) {
            $res['Batches'] = [];
            if (null !== $this->batches && \is_array($this->batches)) {
                $n = 0;
                foreach ($this->batches as $item) {
                    $res['Batches'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBatchesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Batches'])) {
            if (!empty($map['Batches'])) {
                $model->batches = [];
                $n              = 0;
                foreach ($map['Batches'] as $item) {
                    $model->batches[$n++] = null !== $item ? DataIngestion::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
