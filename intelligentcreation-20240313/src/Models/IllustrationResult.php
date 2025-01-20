<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class IllustrationResult extends Model
{
    /**
     * @var Illustration
     */
    public $illustration;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'illustration' => 'illustration',
        'requestId'    => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->illustration) {
            $this->illustration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->illustration) {
            $res['illustration'] = null !== $this->illustration ? $this->illustration->toArray($noStream) : $this->illustration;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['illustration'])) {
            $model->illustration = Illustration::fromMap($map['illustration']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
