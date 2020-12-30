<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListInstanceTaskResponseBody;

use AlibabaCloud\SDK\Airec\V20181012\Models\ListInstanceTaskResponseBody\result\subProgressInfos;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var subProgressInfos[]
     */
    public $subProgressInfos;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $totalProgress;
    protected $_name = [
        'subProgressInfos' => 'SubProgressInfos',
        'name'             => 'Name',
        'totalProgress'    => 'TotalProgress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subProgressInfos) {
            $res['SubProgressInfos'] = [];
            if (null !== $this->subProgressInfos && \is_array($this->subProgressInfos)) {
                $n = 0;
                foreach ($this->subProgressInfos as $item) {
                    $res['SubProgressInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->totalProgress) {
            $res['TotalProgress'] = $this->totalProgress;
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
        if (isset($map['SubProgressInfos'])) {
            if (!empty($map['SubProgressInfos'])) {
                $model->subProgressInfos = [];
                $n                       = 0;
                foreach ($map['SubProgressInfos'] as $item) {
                    $model->subProgressInfos[$n++] = null !== $item ? subProgressInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TotalProgress'])) {
            $model->totalProgress = $map['TotalProgress'];
        }

        return $model;
    }
}
