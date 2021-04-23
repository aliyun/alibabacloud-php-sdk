<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTimeShiftDataResponseBody\timeShiftData;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'type'      => 'Type',
        'size'      => 'Size',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
