<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryPornJobListResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPornJobListResponseBody\pornJobList\pornJob;
use AlibabaCloud\Tea\Model;

class pornJobList extends Model
{
    /**
     * @var pornJob[]
     */
    public $pornJob;
    protected $_name = [
        'pornJob' => 'PornJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pornJob) {
            $res['PornJob'] = [];
            if (null !== $this->pornJob && \is_array($this->pornJob)) {
                $n = 0;
                foreach ($this->pornJob as $item) {
                    $res['PornJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pornJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PornJob'])) {
            if (!empty($map['PornJob'])) {
                $model->pornJob = [];
                $n              = 0;
                foreach ($map['PornJob'] as $item) {
                    $model->pornJob[$n++] = null !== $item ? pornJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
