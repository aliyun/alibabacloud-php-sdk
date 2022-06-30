<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\ListSupportResourceTypesResponseBody\supportResourceTypes;

use AlibabaCloud\Tea\Model;

class supportItems extends Model
{
    /**
     * @var bool
     */
    public $support;

    /**
     * @var string
     */
    public $supportCode;
    protected $_name = [
        'support'     => 'Support',
        'supportCode' => 'SupportCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->support) {
            $res['Support'] = $this->support;
        }
        if (null !== $this->supportCode) {
            $res['SupportCode'] = $this->supportCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Support'])) {
            $model->support = $map['Support'];
        }
        if (isset($map['SupportCode'])) {
            $model->supportCode = $map['SupportCode'];
        }

        return $model;
    }
}
