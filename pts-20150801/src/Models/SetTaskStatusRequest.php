<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20150801\Models;

use AlibabaCloud\Tea\Model;

class SetTaskStatusRequest extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $wskey;
    protected $_name = [
        'status' => 'Status',
        'wskey'  => 'Wskey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->wskey) {
            $res['Wskey'] = $this->wskey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetTaskStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Wskey'])) {
            $model->wskey = $map['Wskey'];
        }

        return $model;
    }
}
