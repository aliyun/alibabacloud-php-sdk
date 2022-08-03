<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class Owner extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $ID;
    protected $_name = [
        'displayName' => 'DisplayName',
        'ID'          => 'ID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Owner
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }

        return $model;
    }
}
