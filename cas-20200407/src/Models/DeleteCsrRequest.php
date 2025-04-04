<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class DeleteCsrRequest extends Model
{
    /**
     * @var int
     */
    public $csrId;
    protected $_name = [
        'csrId' => 'CsrId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->csrId) {
            $res['CsrId'] = $this->csrId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CsrId'])) {
            $model->csrId = $map['CsrId'];
        }

        return $model;
    }
}
