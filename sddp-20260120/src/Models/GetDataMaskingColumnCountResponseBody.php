<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20260120\Models\GetDataMaskingColumnCountResponseBody\columnCount;

class GetDataMaskingColumnCountResponseBody extends Model
{
    /**
     * @var columnCount
     */
    public $columnCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'columnCount' => 'ColumnCount',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->columnCount) {
            $this->columnCount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnCount) {
            $res['ColumnCount'] = null !== $this->columnCount ? $this->columnCount->toArray($noStream) : $this->columnCount;
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
        if (isset($map['ColumnCount'])) {
            $model->columnCount = columnCount::fromMap($map['ColumnCount']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
