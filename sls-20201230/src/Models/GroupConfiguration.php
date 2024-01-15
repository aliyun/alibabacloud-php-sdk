<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GroupConfiguration extends Model
{
    /**
     * @var string[]
     */
    public $fileds;

    /**
     * @example custom
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'fileds' => 'fileds',
        'type'   => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileds) {
            $res['fileds'] = $this->fileds;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GroupConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileds'])) {
            if (!empty($map['fileds'])) {
                $model->fileds = $map['fileds'];
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
