<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;

class GetNodeInputSchemaResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $colNames;

    /**
     * @var string[]
     */
    public $colTypes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'colNames' => 'ColNames',
        'colTypes' => 'ColTypes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->colNames)) {
            Model::validateArray($this->colNames);
        }
        if (\is_array($this->colTypes)) {
            Model::validateArray($this->colTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->colNames) {
            if (\is_array($this->colNames)) {
                $res['ColNames'] = [];
                $n1 = 0;
                foreach ($this->colNames as $item1) {
                    $res['ColNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->colTypes) {
            if (\is_array($this->colTypes)) {
                $res['ColTypes'] = [];
                $n1 = 0;
                foreach ($this->colTypes as $item1) {
                    $res['ColTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ColNames'])) {
            if (!empty($map['ColNames'])) {
                $model->colNames = [];
                $n1 = 0;
                foreach ($map['ColNames'] as $item1) {
                    $model->colNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ColTypes'])) {
            if (!empty($map['ColTypes'])) {
                $model->colTypes = [];
                $n1 = 0;
                foreach ($map['ColTypes'] as $item1) {
                    $model->colTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
