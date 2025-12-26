<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\AddFaceRecordResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $extFaceInfo;

    /**
     * @var string
     */
    public $passed;
    protected $_name = [
        'extFaceInfo' => 'ExtFaceInfo',
        'passed' => 'Passed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extFaceInfo) {
            $res['ExtFaceInfo'] = $this->extFaceInfo;
        }

        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
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
        if (isset($map['ExtFaceInfo'])) {
            $model->extFaceInfo = $map['ExtFaceInfo'];
        }

        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }

        return $model;
    }
}
