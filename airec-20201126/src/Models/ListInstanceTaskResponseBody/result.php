<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListInstanceTaskResponseBody;

use AlibabaCloud\SDK\Airec\V20201126\Models\ListInstanceTaskResponseBody\result\subProgressInfos;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example DATA_IMPORT
     *
     * @var string
     */
    public $name;

    /**
     * @var subProgressInfos[]
     */
    public $subProgressInfos;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalProgress;
    protected $_name = [
        'name'             => 'name',
        'subProgressInfos' => 'subProgressInfos',
        'totalProgress'    => 'totalProgress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->subProgressInfos) {
            $res['subProgressInfos'] = [];
            if (null !== $this->subProgressInfos && \is_array($this->subProgressInfos)) {
                $n = 0;
                foreach ($this->subProgressInfos as $item) {
                    $res['subProgressInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalProgress) {
            $res['totalProgress'] = $this->totalProgress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['subProgressInfos'])) {
            if (!empty($map['subProgressInfos'])) {
                $model->subProgressInfos = [];
                $n                       = 0;
                foreach ($map['subProgressInfos'] as $item) {
                    $model->subProgressInfos[$n++] = null !== $item ? subProgressInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalProgress'])) {
            $model->totalProgress = $map['totalProgress'];
        }

        return $model;
    }
}
