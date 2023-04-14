<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\File;

use AlibabaCloud\Tea\Model;

class investigationInfo extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'status'     => 'status',
        'suggestion' => 'suggestion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->suggestion) {
            $res['suggestion'] = $this->suggestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return investigationInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['suggestion'])) {
            $model->suggestion = $map['suggestion'];
        }

        return $model;
    }
}
