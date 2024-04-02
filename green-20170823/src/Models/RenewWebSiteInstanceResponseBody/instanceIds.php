<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\RenewWebSiteInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class instanceIds extends Model
{
    /**
     * @var string[]
     */
    public $string;
    protected $_name = [
        'string' => 'String',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->string) {
            $res['String'] = $this->string;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['String'])) {
            if (!empty($map['String'])) {
                $model->string = $map['String'];
            }
        }

        return $model;
    }
}
