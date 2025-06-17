<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnTypesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnTypesResponseBody\cdnTypes\cdnType;

class cdnTypes extends Model
{
    /**
     * @var cdnType[]
     */
    public $cdnType;
    protected $_name = [
        'cdnType' => 'CdnType',
    ];

    public function validate()
    {
        if (\is_array($this->cdnType)) {
            Model::validateArray($this->cdnType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdnType) {
            if (\is_array($this->cdnType)) {
                $res['CdnType'] = [];
                $n1 = 0;
                foreach ($this->cdnType as $item1) {
                    $res['CdnType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CdnType'])) {
            if (!empty($map['CdnType'])) {
                $model->cdnType = [];
                $n1 = 0;
                foreach ($map['CdnType'] as $item1) {
                    $model->cdnType[$n1] = cdnType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
