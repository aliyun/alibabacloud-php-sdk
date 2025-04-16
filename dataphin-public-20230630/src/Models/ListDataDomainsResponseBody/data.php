<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataDomainsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataDomainsResponseBody\data\dataDomainList;

class data extends Model
{
    /**
     * @var dataDomainList[]
     */
    public $dataDomainList;
    protected $_name = [
        'dataDomainList' => 'DataDomainList',
    ];

    public function validate()
    {
        if (\is_array($this->dataDomainList)) {
            Model::validateArray($this->dataDomainList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDomainList) {
            if (\is_array($this->dataDomainList)) {
                $res['DataDomainList'] = [];
                $n1 = 0;
                foreach ($this->dataDomainList as $item1) {
                    $res['DataDomainList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataDomainList'])) {
            if (!empty($map['DataDomainList'])) {
                $model->dataDomainList = [];
                $n1 = 0;
                foreach ($map['DataDomainList'] as $item1) {
                    $model->dataDomainList[$n1++] = dataDomainList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
