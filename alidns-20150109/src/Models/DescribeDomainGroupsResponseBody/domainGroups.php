<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainGroupsResponseBody\domainGroups\domainGroup;

class domainGroups extends Model
{
    /**
     * @var domainGroup[]
     */
    public $domainGroup;
    protected $_name = [
        'domainGroup' => 'DomainGroup',
    ];

    public function validate()
    {
        if (\is_array($this->domainGroup)) {
            Model::validateArray($this->domainGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainGroup) {
            if (\is_array($this->domainGroup)) {
                $res['DomainGroup'] = [];
                $n1                 = 0;
                foreach ($this->domainGroup as $item1) {
                    $res['DomainGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainGroup'])) {
            if (!empty($map['DomainGroup'])) {
                $model->domainGroup = [];
                $n1                 = 0;
                foreach ($map['DomainGroup'] as $item1) {
                    $model->domainGroup[$n1++] = domainGroup::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
