<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class DeleteAccessPageRequest extends Model
{
    /**
     * @var string
     */
    public $accessPageId;
    protected $_name = [
        'accessPageId' => 'AccessPageId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPageId) {
            $res['AccessPageId'] = $this->accessPageId;
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
        if (isset($map['AccessPageId'])) {
            $model->accessPageId = $map['AccessPageId'];
        }

        return $model;
    }
}
