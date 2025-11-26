<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeConfiguredDomainNamesResponseBody\domainNames;

class DescribeConfiguredDomainNamesResponseBody extends Model
{
    /**
     * @var domainNames[]
     */
    public $domainNames;

    /**
     * @var string
     */
    public $module;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'domainNames' => 'DomainNames',
        'module' => 'Module',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->domainNames)) {
            Model::validateArray($this->domainNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainNames) {
            if (\is_array($this->domainNames)) {
                $res['DomainNames'] = [];
                $n1 = 0;
                foreach ($this->domainNames as $item1) {
                    $res['DomainNames'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->module) {
            $res['Module'] = $this->module;
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
        if (isset($map['DomainNames'])) {
            if (!empty($map['DomainNames'])) {
                $model->domainNames = [];
                $n1 = 0;
                foreach ($map['DomainNames'] as $item1) {
                    $model->domainNames[$n1] = domainNames::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Module'])) {
            $model->module = $map['Module'];
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
