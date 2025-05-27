<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\Dara\Model;

class DescribeLabRequest extends Model
{
    /**
     * @var int
     */
    public $labId;
    protected $_name = [
        'labId' => 'LabId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labId) {
            $res['LabId'] = $this->labId;
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
        if (isset($map['LabId'])) {
            $model->labId = $map['LabId'];
        }

        return $model;
    }
}
