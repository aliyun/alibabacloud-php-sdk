<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGeoInfoResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGeoInfoResponseBody\content\continents;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var continents[]
     */
    public $continents;

    /**
     * @example CN
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'continents' => 'Continents',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->continents) {
            $res['Continents'] = [];
            if (null !== $this->continents && \is_array($this->continents)) {
                $n = 0;
                foreach ($this->continents as $item) {
                    $res['Continents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Continents'])) {
            if (!empty($map['Continents'])) {
                $model->continents = [];
                $n                 = 0;
                foreach ($map['Continents'] as $item) {
                    $model->continents[$n++] = null !== $item ? continents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
