<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202\Models;

use AlibabaCloud\Tea\Model;

class DescribeLabRequest extends Model
{
    /**
     * @var string
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
