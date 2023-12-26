<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesetsResponseBody;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesetsResponseBody\entries\entrie;
use AlibabaCloud\Tea\Model;

class entries extends Model
{
    /**
     * @var entrie[]
     */
    public $entrie;
    protected $_name = [
        'entrie' => 'Entrie',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entrie) {
            $res['Entrie'] = [];
            if (null !== $this->entrie && \is_array($this->entrie)) {
                $n = 0;
                foreach ($this->entrie as $item) {
                    $res['Entrie'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Entrie'])) {
            if (!empty($map['Entrie'])) {
                $model->entrie = [];
                $n             = 0;
                foreach ($map['Entrie'] as $item) {
                    $model->entrie[$n++] = null !== $item ? entrie::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
