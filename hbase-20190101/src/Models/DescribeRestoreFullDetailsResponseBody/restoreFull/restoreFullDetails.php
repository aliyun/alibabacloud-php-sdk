<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreFullDetailsResponseBody\restoreFull;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreFullDetailsResponseBody\restoreFull\restoreFullDetails\restoreFullDetail;
use AlibabaCloud\Tea\Model;

class restoreFullDetails extends Model
{
    /**
     * @var restoreFullDetail[]
     */
    public $restoreFullDetail;
    protected $_name = [
        'restoreFullDetail' => 'RestoreFullDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->restoreFullDetail) {
            $res['RestoreFullDetail'] = [];
            if (null !== $this->restoreFullDetail && \is_array($this->restoreFullDetail)) {
                $n = 0;
                foreach ($this->restoreFullDetail as $item) {
                    $res['RestoreFullDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return restoreFullDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RestoreFullDetail'])) {
            if (!empty($map['RestoreFullDetail'])) {
                $model->restoreFullDetail = [];
                $n                        = 0;
                foreach ($map['RestoreFullDetail'] as $item) {
                    $model->restoreFullDetail[$n++] = null !== $item ? restoreFullDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
