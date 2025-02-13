<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormComponentDefinitionListResponseBody\result;

class GetFormComponentDefinitionListResponseBody extends Model
{
    /**
     * @var result[]
     */
    public $result;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $vendorRequestId;
    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'result'          => 'Result',
        'requestId'       => 'requestId',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType'      => 'vendorType',
    ];

    public function validate()
    {
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->result) {
            if (\is_array($this->result)) {
                $res['Result'] = [];
                $n1            = 0;
                foreach ($this->result as $item1) {
                    $res['Result'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n1            = 0;
                foreach ($map['Result'] as $item1) {
                    $model->result[$n1++] = result::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
