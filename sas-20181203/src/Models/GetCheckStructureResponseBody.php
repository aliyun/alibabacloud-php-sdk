<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckStructureResponseBody\checkStructureResponse;

class GetCheckStructureResponseBody extends Model
{
    /**
     * @var checkStructureResponse[]
     */
    public $checkStructureResponse;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkStructureResponse' => 'CheckStructureResponse',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->checkStructureResponse)) {
            Model::validateArray($this->checkStructureResponse);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkStructureResponse) {
            if (\is_array($this->checkStructureResponse)) {
                $res['CheckStructureResponse'] = [];
                $n1                            = 0;
                foreach ($this->checkStructureResponse as $item1) {
                    $res['CheckStructureResponse'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CheckStructureResponse'])) {
            if (!empty($map['CheckStructureResponse'])) {
                $model->checkStructureResponse = [];
                $n1                            = 0;
                foreach ($map['CheckStructureResponse'] as $item1) {
                    $model->checkStructureResponse[$n1++] = checkStructureResponse::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
