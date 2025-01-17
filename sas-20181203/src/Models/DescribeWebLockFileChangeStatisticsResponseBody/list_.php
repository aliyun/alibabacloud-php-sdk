<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockFileChangeStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var string
     */
    public $file;
    protected $_name = [
        'count' => 'Count',
        'file'  => 'File',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->file) {
            $res['File'] = $this->file;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['File'])) {
            $model->file = $map['File'];
        }

        return $model;
    }
}
