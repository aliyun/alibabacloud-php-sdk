<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListSoftwaresRequest extends Model
{
    /**
     * @var string
     */
    public $ehpcVersion;

    /**
     * @var string
     */
    public $osTag;
    protected $_name = [
        'ehpcVersion' => 'EhpcVersion',
        'osTag'       => 'OsTag',
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
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
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
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }

        return $model;
    }
}
