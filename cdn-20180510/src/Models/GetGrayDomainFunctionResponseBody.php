<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\GetGrayDomainFunctionResponseBody\domainConfigList;
use AlibabaCloud\Tea\Model;

class GetGrayDomainFunctionResponseBody extends Model
{
    /**
     * @var domainConfigList[]
     */
    public $domainConfigList;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $progression;

    /**
     * @example C80705BF-0F76-41FA-BAD1-5B59296A4E59
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainConfigList) {
            $res['DomainConfigList'] = [];
            if (null !== $this->domainConfigList && \is_array($this->domainConfigList)) {
                $n = 0;
                foreach ($this->domainConfigList as $item) {
                    $res['DomainConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return GetGrayDomainFunctionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainConfigList'])) {
            if (!empty($map['DomainConfigList'])) {
                $model->domainConfigList = [];
                $n = 0;
                foreach ($map['DomainConfigList'] as $item) {
                    $model->domainConfigList[$n++] = null !== $item ? domainConfigList::fromMap($item) : $item;
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
