<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class SubmitCheckRequest extends Model
{
    /**
     * @var string
     */
    public $scanRange;
    protected $_name = [
        'scanRange' => 'ScanRange',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scanRange) {
            $res['ScanRange'] = $this->scanRange;
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
        if (isset($map['ScanRange'])) {
            $model->scanRange = $map['ScanRange'];
        }

        return $model;
    }
}
