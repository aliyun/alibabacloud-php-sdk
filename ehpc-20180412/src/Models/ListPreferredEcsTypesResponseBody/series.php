<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series\seriesInfo;

class series extends Model
{
    /**
     * @var seriesInfo[]
     */
    public $seriesInfo;
    protected $_name = [
        'seriesInfo' => 'SeriesInfo',
    ];

    public function validate()
    {
        if (\is_array($this->seriesInfo)) {
            Model::validateArray($this->seriesInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->seriesInfo) {
            if (\is_array($this->seriesInfo)) {
                $res['SeriesInfo'] = [];
                $n1 = 0;
                foreach ($this->seriesInfo as $item1) {
                    $res['SeriesInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SeriesInfo'])) {
            if (!empty($map['SeriesInfo'])) {
                $model->seriesInfo = [];
                $n1 = 0;
                foreach ($map['SeriesInfo'] as $item1) {
                    $model->seriesInfo[$n1++] = seriesInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
