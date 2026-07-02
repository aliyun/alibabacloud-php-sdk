<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceMultiVIPResponseBody\multiVIPList;

class DescribeInstanceMultiVIPResponseBody extends Model
{
    /**
     * @var string
     */
    public $masterDns;

    /**
     * @var string[]
     */
    public $masterDnsRecord;

    /**
     * @var int
     */
    public $maxQuota;

    /**
     * @var multiVIPList[]
     */
    public $multiVIPList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'masterDns' => 'MasterDns',
        'masterDnsRecord' => 'MasterDnsRecord',
        'maxQuota' => 'MaxQuota',
        'multiVIPList' => 'MultiVIPList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->masterDnsRecord)) {
            Model::validateArray($this->masterDnsRecord);
        }
        if (\is_array($this->multiVIPList)) {
            Model::validateArray($this->multiVIPList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->masterDns) {
            $res['MasterDns'] = $this->masterDns;
        }

        if (null !== $this->masterDnsRecord) {
            if (\is_array($this->masterDnsRecord)) {
                $res['MasterDnsRecord'] = [];
                $n1 = 0;
                foreach ($this->masterDnsRecord as $item1) {
                    $res['MasterDnsRecord'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxQuota) {
            $res['MaxQuota'] = $this->maxQuota;
        }

        if (null !== $this->multiVIPList) {
            if (\is_array($this->multiVIPList)) {
                $res['MultiVIPList'] = [];
                $n1 = 0;
                foreach ($this->multiVIPList as $item1) {
                    $res['MultiVIPList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MasterDns'])) {
            $model->masterDns = $map['MasterDns'];
        }

        if (isset($map['MasterDnsRecord'])) {
            if (!empty($map['MasterDnsRecord'])) {
                $model->masterDnsRecord = [];
                $n1 = 0;
                foreach ($map['MasterDnsRecord'] as $item1) {
                    $model->masterDnsRecord[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxQuota'])) {
            $model->maxQuota = $map['MaxQuota'];
        }

        if (isset($map['MultiVIPList'])) {
            if (!empty($map['MultiVIPList'])) {
                $model->multiVIPList = [];
                $n1 = 0;
                foreach ($map['MultiVIPList'] as $item1) {
                    $model->multiVIPList[$n1] = multiVIPList::fromMap($item1);
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
