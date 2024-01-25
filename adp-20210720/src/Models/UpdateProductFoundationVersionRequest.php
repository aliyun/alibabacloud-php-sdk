<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class UpdateProductFoundationVersionRequest extends Model
{
    /**
     * @example 796f9044-8684-4de5-9b12-xxxxxxxxxxxx
     *
     * @var string
     */
    public $foundationVersionUID;
    protected $_name = [
        'foundationVersionUID' => 'foundationVersionUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->foundationVersionUID) {
            $res['foundationVersionUID'] = $this->foundationVersionUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProductFoundationVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['foundationVersionUID'])) {
            $model->foundationVersionUID = $map['foundationVersionUID'];
        }

        return $model;
    }
}
