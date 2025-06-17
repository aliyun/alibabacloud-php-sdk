<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchSetGrayDomainFunctionResponseBody\domainConfigList;

class BatchSetGrayDomainFunctionResponseBody extends Model
{
    /**
     * @var domainConfigList[]
     */
    public $domainConfigList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainConfigList' => 'DomainConfigList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainConfigList)) {
            Model::validateArray($this->domainConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainConfigList) {
            if (\is_array($this->domainConfigList)) {
                $res['DomainConfigList'] = [];
                $n1 = 0;
                foreach ($this->domainConfigList as $item1) {
                    $res['DomainConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainConfigList'])) {
            if (!empty($map['DomainConfigList'])) {
                $model->domainConfigList = [];
                $n1 = 0;
                foreach ($map['DomainConfigList'] as $item1) {
                    $model->domainConfigList[$n1] = domainConfigList::fromMap($item1);
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
