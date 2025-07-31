<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataDomainsResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataDomainsResponseBody\data\dataDomainList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var dataDomainList[]
     */
    public $dataDomainList;
    protected $_name = [
        'dataDomainList' => 'DataDomainList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDomainList) {
            $res['DataDomainList'] = [];
            if (null !== $this->dataDomainList && \is_array($this->dataDomainList)) {
                $n = 0;
                foreach ($this->dataDomainList as $item) {
                    $res['DataDomainList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDomainList'])) {
            if (!empty($map['DataDomainList'])) {
                $model->dataDomainList = [];
                $n = 0;
                foreach ($map['DataDomainList'] as $item) {
                    $model->dataDomainList[$n++] = null !== $item ? dataDomainList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
