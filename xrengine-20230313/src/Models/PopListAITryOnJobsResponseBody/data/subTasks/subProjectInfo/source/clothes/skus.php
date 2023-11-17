<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\subTasks\subProjectInfo\source\clothes;

use AlibabaCloud\Tea\Model;

class skus extends Model
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $cover;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'color'  => 'Color',
        'cover'  => 'Cover',
        'size'   => 'Size',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->cover) {
            $res['Cover'] = $this->cover;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['Cover'])) {
            $model->cover = $map['Cover'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
