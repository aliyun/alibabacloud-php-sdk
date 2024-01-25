<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class GetProductVersionDifferencesRequest extends Model
{
    /**
     * @var string
     */
    public $preVersionUID;
    protected $_name = [
        'preVersionUID' => 'preVersionUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preVersionUID) {
            $res['preVersionUID'] = $this->preVersionUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProductVersionDifferencesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['preVersionUID'])) {
            $model->preVersionUID = $map['preVersionUID'];
        }

        return $model;
    }
}
