<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockFileChangeStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The number of attempts.
     *
     * @example 33
     *
     * @var int
     */
    public $count;

    /**
     * @description The file path.
     *
     * @example /tmp
     *
     * @var string
     */
    public $file;
    protected $_name = [
        'count' => 'Count',
        'file'  => 'File',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return list_
     */
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
