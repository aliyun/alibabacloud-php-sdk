<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorISPCityListResponseBody\ispCityList\ispCity;

use AlibabaCloud\Dara\Model;

class IPPool extends Model
{
    /**
     * @var string[]
     */
    public $IPPool;
    protected $_name = [
        'IPPool' => 'IPPool',
    ];

    public function validate()
    {
        if (\is_array($this->IPPool)) {
            Model::validateArray($this->IPPool);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->IPPool) {
            if (\is_array($this->IPPool)) {
                $res['IPPool'] = [];
                $n1 = 0;
                foreach ($this->IPPool as $item1) {
                    $res['IPPool'][$n1] = $item1;
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
        if (isset($map['IPPool'])) {
            if (!empty($map['IPPool'])) {
                $model->IPPool = [];
                $n1 = 0;
                foreach ($map['IPPool'] as $item1) {
                    $model->IPPool[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
