<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListLabelTablesResponseBody\labelTables;

class ListLabelTablesResponseBody extends Model
{
    /**
     * @var labelTables[]
     */
    public $labelTables;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'labelTables' => 'LabelTables',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->labelTables)) {
            Model::validateArray($this->labelTables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelTables) {
            if (\is_array($this->labelTables)) {
                $res['LabelTables'] = [];
                $n1 = 0;
                foreach ($this->labelTables as $item1) {
                    $res['LabelTables'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['LabelTables'])) {
            if (!empty($map['LabelTables'])) {
                $model->labelTables = [];
                $n1 = 0;
                foreach ($map['LabelTables'] as $item1) {
                    $model->labelTables[$n1++] = labelTables::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
