<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeTriggerResponseBody\result;

use AlibabaCloud\Tea\Model;

class checkpoint extends Model
{
    /**
     * @var int
     */
    public $errorCount;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'errorCount' => 'ErrorCount',
        'height'     => 'Height',
        'index'      => 'Index',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkpoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
