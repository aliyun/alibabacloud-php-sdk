<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListProjectRequest extends Model
{
    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'offset'      => 'offset',
        'projectName' => 'projectName',
        'size'        => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
