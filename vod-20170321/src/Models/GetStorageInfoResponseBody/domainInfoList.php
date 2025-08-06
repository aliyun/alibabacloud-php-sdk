<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetStorageInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetStorageInfoResponseBody\domainInfoList\domainInfo;

class domainInfoList extends Model
{
    /**
     * @var domainInfo[]
     */
    public $domainInfo;
    protected $_name = [
        'domainInfo' => 'DomainInfo',
    ];

    public function validate()
    {
        if (\is_array($this->domainInfo)) {
            Model::validateArray($this->domainInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainInfo) {
            if (\is_array($this->domainInfo)) {
                $res['DomainInfo'] = [];
                $n1 = 0;
                foreach ($this->domainInfo as $item1) {
                    $res['DomainInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DomainInfo'])) {
            if (!empty($map['DomainInfo'])) {
                $model->domainInfo = [];
                $n1 = 0;
                foreach ($map['DomainInfo'] as $item1) {
                    $model->domainInfo[$n1] = domainInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
