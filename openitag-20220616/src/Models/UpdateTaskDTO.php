<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskDTO extends Model
{
    /**
     * @var string[]
     */
    public $exif;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'exif'     => 'Exif',
        'remark'   => 'Remark',
        'tags'     => 'Tags',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exif) {
            $res['Exif'] = $this->exif;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Exif'])) {
            $model->exif = $map['Exif'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
