<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $option;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'option' => 'Option',
        'type'   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->option) {
            $res['Option'] = $this->option;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Option'])) {
            $model->option = $map['Option'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
