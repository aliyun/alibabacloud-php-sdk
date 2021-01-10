<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponseBody\terrorismJobList\terrorismJob;
use AlibabaCloud\Tea\Model;

class terrorismJobList extends Model
{
    /**
     * @var terrorismJob[]
     */
    public $terrorismJob;
    protected $_name = [
        'terrorismJob' => 'TerrorismJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->terrorismJob) {
            $res['TerrorismJob'] = [];
            if (null !== $this->terrorismJob && \is_array($this->terrorismJob)) {
                $n = 0;
                foreach ($this->terrorismJob as $item) {
                    $res['TerrorismJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terrorismJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TerrorismJob'])) {
            if (!empty($map['TerrorismJob'])) {
                $model->terrorismJob = [];
                $n                   = 0;
                foreach ($map['TerrorismJob'] as $item) {
                    $model->terrorismJob[$n++] = null !== $item ? terrorismJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
