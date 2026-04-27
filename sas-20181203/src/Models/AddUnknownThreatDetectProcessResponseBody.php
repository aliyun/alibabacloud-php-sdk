<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddUnknownThreatDetectProcessResponseBody\idList;

class AddUnknownThreatDetectProcessResponseBody extends Model
{
    /**
     * @var idList[]
     */
    public $idList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'idList' => 'IdList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->idList)) {
            Model::validateArray($this->idList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->idList) {
            if (\is_array($this->idList)) {
                $res['IdList'] = [];
                $n1 = 0;
                foreach ($this->idList as $item1) {
                    $res['IdList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IdList'])) {
            if (!empty($map['IdList'])) {
                $model->idList = [];
                $n1 = 0;
                foreach ($map['IdList'] as $item1) {
                    $model->idList[$n1] = idList::fromMap($item1);
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
