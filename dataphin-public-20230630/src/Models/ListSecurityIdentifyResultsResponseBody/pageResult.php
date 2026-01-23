<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListSecurityIdentifyResultsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListSecurityIdentifyResultsResponseBody\pageResult\securityIdentifyResultList;

class pageResult extends Model
{
    /**
     * @var securityIdentifyResultList[]
     */
    public $securityIdentifyResultList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'securityIdentifyResultList' => 'SecurityIdentifyResultList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->securityIdentifyResultList)) {
            Model::validateArray($this->securityIdentifyResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityIdentifyResultList) {
            if (\is_array($this->securityIdentifyResultList)) {
                $res['SecurityIdentifyResultList'] = [];
                $n1 = 0;
                foreach ($this->securityIdentifyResultList as $item1) {
                    $res['SecurityIdentifyResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SecurityIdentifyResultList'])) {
            if (!empty($map['SecurityIdentifyResultList'])) {
                $model->securityIdentifyResultList = [];
                $n1 = 0;
                foreach ($map['SecurityIdentifyResultList'] as $item1) {
                    $model->securityIdentifyResultList[$n1] = securityIdentifyResultList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
