<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendDifferentApisResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendDifferentApisResponseBody\conflictApis\conflictApi;
use AlibabaCloud\Tea\Model;

class conflictApis extends Model
{
    /**
     * @var conflictApi[]
     */
    public $conflictApi;
    protected $_name = [
        'conflictApi' => 'ConflictApi',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conflictApi) {
            $res['ConflictApi'] = [];
            if (null !== $this->conflictApi && \is_array($this->conflictApi)) {
                $n = 0;
                foreach ($this->conflictApi as $item) {
                    $res['ConflictApi'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conflictApis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConflictApi'])) {
            if (!empty($map['ConflictApi'])) {
                $model->conflictApi = [];
                $n                  = 0;
                foreach ($map['ConflictApi'] as $item) {
                    $model->conflictApi[$n++] = null !== $item ? conflictApi::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
