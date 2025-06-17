<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\GetGrayDomainFunctionResponseBody\domainConfigList;

class GetGrayDomainFunctionResponseBody extends Model
{
    /**
     * @var domainConfigList[]
     */
    public $domainConfigList;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $progression;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'domainConfigList' => 'DomainConfigList',
        'domainName' => 'DomainName',
        'progression' => 'Progression',
        'requestId' => 'RequestId',
        'status' => 'Status',
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

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->progression) {
            $res['Progression'] = $this->progression;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['Progression'])) {
            $model->progression = $map['Progression'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
