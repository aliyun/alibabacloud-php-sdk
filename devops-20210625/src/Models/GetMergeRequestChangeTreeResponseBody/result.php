<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestChangeTreeResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestChangeTreeResponseBody\result\changedFilesInfos;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $changedFilesCount;

    /**
     * @var changedFilesInfos[]
     */
    public $changedFilesInfos;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalAddLines;

    /**
     * @example 50
     *
     * @var int
     */
    public $totalDelLines;
    protected $_name = [
        'changedFilesCount' => 'changedFilesCount',
        'changedFilesInfos' => 'changedFilesInfos',
        'totalAddLines'     => 'totalAddLines',
        'totalDelLines'     => 'totalDelLines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changedFilesCount) {
            $res['changedFilesCount'] = $this->changedFilesCount;
        }
        if (null !== $this->changedFilesInfos) {
            $res['changedFilesInfos'] = [];
            if (null !== $this->changedFilesInfos && \is_array($this->changedFilesInfos)) {
                $n = 0;
                foreach ($this->changedFilesInfos as $item) {
                    $res['changedFilesInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalAddLines) {
            $res['totalAddLines'] = $this->totalAddLines;
        }
        if (null !== $this->totalDelLines) {
            $res['totalDelLines'] = $this->totalDelLines;
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
        if (isset($map['changedFilesCount'])) {
            $model->changedFilesCount = $map['changedFilesCount'];
        }
        if (isset($map['changedFilesInfos'])) {
            if (!empty($map['changedFilesInfos'])) {
                $model->changedFilesInfos = [];
                $n                        = 0;
                foreach ($map['changedFilesInfos'] as $item) {
                    $model->changedFilesInfos[$n++] = null !== $item ? changedFilesInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalAddLines'])) {
            $model->totalAddLines = $map['totalAddLines'];
        }
        if (isset($map['totalDelLines'])) {
            $model->totalDelLines = $map['totalDelLines'];
        }

        return $model;
    }
}
