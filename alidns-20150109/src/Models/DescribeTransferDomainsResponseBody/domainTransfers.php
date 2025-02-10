<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeTransferDomainsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeTransferDomainsResponseBody\domainTransfers\domainTransfer;

class domainTransfers extends Model
{
    /**
     * @var domainTransfer[]
     */
    public $domainTransfer;
    protected $_name = [
        'domainTransfer' => 'DomainTransfer',
    ];

    public function validate()
    {
        if (\is_array($this->domainTransfer)) {
            Model::validateArray($this->domainTransfer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainTransfer) {
            if (\is_array($this->domainTransfer)) {
                $res['DomainTransfer'] = [];
                $n1                    = 0;
                foreach ($this->domainTransfer as $item1) {
                    $res['DomainTransfer'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DomainTransfer'])) {
            if (!empty($map['DomainTransfer'])) {
                $model->domainTransfer = [];
                $n1                    = 0;
                foreach ($map['DomainTransfer'] as $item1) {
                    $model->domainTransfer[$n1++] = domainTransfer::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
