<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalSchemasResponseBody\schemas;

class ListApprovalSchemasResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var schemas[]
     */
    public $schemas;
    /**
     * @var string
     */
    public $totalNum;
    protected $_name = [
        'requestId' => 'RequestId',
        'schemas'   => 'Schemas',
        'totalNum'  => 'TotalNum',
    ];

    public function validate()
    {
        if (\is_array($this->schemas)) {
            Model::validateArray($this->schemas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->schemas) {
            if (\is_array($this->schemas)) {
                $res['Schemas'] = [];
                $n1             = 0;
                foreach ($this->schemas as $item1) {
                    $res['Schemas'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Schemas'])) {
            if (!empty($map['Schemas'])) {
                $model->schemas = [];
                $n1             = 0;
                foreach ($map['Schemas'] as $item1) {
                    $model->schemas[$n1++] = schemas::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
