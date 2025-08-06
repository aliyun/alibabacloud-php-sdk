<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListDNADBResponseBody\DNADBList;

class ListDNADBResponseBody extends Model
{
    /**
     * @var DNADBList[]
     */
    public $DNADBList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DNADBList' => 'DNADBList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->DNADBList)) {
            Model::validateArray($this->DNADBList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DNADBList) {
            if (\is_array($this->DNADBList)) {
                $res['DNADBList'] = [];
                $n1 = 0;
                foreach ($this->DNADBList as $item1) {
                    $res['DNADBList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DNADBList'])) {
            if (!empty($map['DNADBList'])) {
                $model->DNADBList = [];
                $n1 = 0;
                foreach ($map['DNADBList'] as $item1) {
                    $model->DNADBList[$n1] = DNADBList::fromMap($item1);
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
