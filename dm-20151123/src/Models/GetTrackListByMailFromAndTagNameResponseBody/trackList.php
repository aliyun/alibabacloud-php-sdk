<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\GetTrackListByMailFromAndTagNameResponseBody;

use AlibabaCloud\SDK\Dm\V20151123\Models\GetTrackListByMailFromAndTagNameResponseBody\trackList\stat;
use AlibabaCloud\Tea\Model;

class trackList extends Model
{
    /**
     * @var stat[]
     */
    public $stat;
    protected $_name = [
        'stat' => 'Stat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stat) {
            $res['Stat'] = [];
            if (null !== $this->stat && \is_array($this->stat)) {
                $n = 0;
                foreach ($this->stat as $item) {
                    $res['Stat'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trackList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Stat'])) {
            if (!empty($map['Stat'])) {
                $model->stat = [];
                $n           = 0;
                foreach ($map['Stat'] as $item) {
                    $model->stat[$n++] = null !== $item ? stat::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
