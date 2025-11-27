<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody\relatedCustinsInfo\relatedCustinsInfo;

class relatedCustinsInfo extends Model
{
    /**
     * @var relatedCustinsInfo[]
     */
    public $relatedCustinsInfo;
    protected $_name = [
        'relatedCustinsInfo' => 'RelatedCustinsInfo',
    ];

    public function validate()
    {
        if (\is_array($this->relatedCustinsInfo)) {
            Model::validateArray($this->relatedCustinsInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->relatedCustinsInfo) {
            if (\is_array($this->relatedCustinsInfo)) {
                $res['RelatedCustinsInfo'] = [];
                $n1 = 0;
                foreach ($this->relatedCustinsInfo as $item1) {
                    $res['RelatedCustinsInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RelatedCustinsInfo'])) {
            if (!empty($map['RelatedCustinsInfo'])) {
                $model->relatedCustinsInfo = [];
                $n1 = 0;
                foreach ($map['RelatedCustinsInfo'] as $item1) {
                    $model->relatedCustinsInfo[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
