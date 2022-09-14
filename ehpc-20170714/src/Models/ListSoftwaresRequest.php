<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20170714\Models;

use AlibabaCloud\Tea\Model;

class ListSoftwaresRequest extends Model
{
    /**
     * @var string
     */
    public $ehpcVersion;
    protected $_name = [
        'ehpcVersion' => 'EhpcVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ehpcVersion) {
            $res['EhpcVersion'] = $this->ehpcVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSoftwaresRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EhpcVersion'])) {
            $model->ehpcVersion = $map['EhpcVersion'];
        }

        return $model;
    }
}
