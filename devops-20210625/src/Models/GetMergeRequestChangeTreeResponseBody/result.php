<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestChangeTreeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestChangeTreeResponseBody\result\changedFilesInfos;

class result extends Model
{
    /**
     * @var int
     */
    public $changedFilesCount;

    /**
     * @var changedFilesInfos[]
     */
    public $changedFilesInfos;

    /**
     * @var int
     */
    public $totalAddLines;

    /**
     * @var int
     */
    public $totalDelLines;
    protected $_name = [
        'changedFilesCount' => 'changedFilesCount',
        'changedFilesInfos' => 'changedFilesInfos',
        'totalAddLines' => 'totalAddLines',
        'totalDelLines' => 'totalDelLines',
    ];

    public function validate()
    {
        if (\is_array($this->changedFilesInfos)) {
            Model::validateArray($this->changedFilesInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changedFilesCount) {
            $res['changedFilesCount'] = $this->changedFilesCount;
        }

        if (null !== $this->changedFilesInfos) {
            if (\is_array($this->changedFilesInfos)) {
                $res['changedFilesInfos'] = [];
                $n1 = 0;
                foreach ($this->changedFilesInfos as $item1) {
                    $res['changedFilesInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['changedFilesCount'])) {
            $model->changedFilesCount = $map['changedFilesCount'];
        }

        if (isset($map['changedFilesInfos'])) {
            if (!empty($map['changedFilesInfos'])) {
                $model->changedFilesInfos = [];
                $n1 = 0;
                foreach ($map['changedFilesInfos'] as $item1) {
                    $model->changedFilesInfos[$n1] = changedFilesInfos::fromMap($item1);
                    ++$n1;
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
