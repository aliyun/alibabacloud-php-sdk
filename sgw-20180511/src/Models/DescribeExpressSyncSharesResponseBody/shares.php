<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeExpressSyncSharesResponseBody;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeExpressSyncSharesResponseBody\shares\share;
use AlibabaCloud\Tea\Model;

class shares extends Model
{
    /**
     * @var share[]
     */
    public $share;
    protected $_name = [
        'share' => 'Share',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->share) {
            $res['Share'] = [];
            if (null !== $this->share && \is_array($this->share)) {
                $n = 0;
                foreach ($this->share as $item) {
                    $res['Share'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return shares
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Share'])) {
            if (!empty($map['Share'])) {
                $model->share = [];
                $n            = 0;
                foreach ($map['Share'] as $item) {
                    $model->share[$n++] = null !== $item ? share::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
