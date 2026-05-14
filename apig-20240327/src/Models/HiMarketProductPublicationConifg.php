<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class HiMarketProductPublicationConifg extends Model
{
    /**
     * @var string
     */
    public $publicationId;
    protected $_name = [
        'publicationId' => 'publicationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->publicationId) {
            $res['publicationId'] = $this->publicationId;
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
        if (isset($map['publicationId'])) {
            $model->publicationId = $map['publicationId'];
        }

        return $model;
    }
}
