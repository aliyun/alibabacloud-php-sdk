<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeSupportLinesResponseBody\recordLines;
use AlibabaCloud\Tea\Model;

class DescribeSupportLinesResponseBody extends Model
{
    /**
     * @var recordLines[]
     */
    public $recordLines;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recordLines' => 'RecordLines',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordLines) {
            $res['RecordLines'] = [];
            if (null !== $this->recordLines && \is_array($this->recordLines)) {
                $n = 0;
                foreach ($this->recordLines as $item) {
                    $res['RecordLines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSupportLinesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordLines'])) {
            if (!empty($map['RecordLines'])) {
                $model->recordLines = [];
                $n                  = 0;
                foreach ($map['RecordLines'] as $item) {
                    $model->recordLines[$n++] = null !== $item ? recordLines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
