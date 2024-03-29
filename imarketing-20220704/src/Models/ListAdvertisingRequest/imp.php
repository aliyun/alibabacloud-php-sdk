<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingRequest;

use AlibabaCloud\Tea\Model;

class imp extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $tagid;
    protected $_name = [
        'id'    => 'Id',
        'tagid' => 'Tagid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->tagid) {
            $res['Tagid'] = $this->tagid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Tagid'])) {
            $model->tagid = $map['Tagid'];
        }

        return $model;
    }
}
