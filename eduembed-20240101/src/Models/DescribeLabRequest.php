<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLabRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 875
     *
     * @var int
     */
    public $labId;
    protected $_name = [
        'labId' => 'LabId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labId) {
            $res['LabId'] = $this->labId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLabRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabId'])) {
            $model->labId = $map['LabId'];
        }

        return $model;
    }
}
