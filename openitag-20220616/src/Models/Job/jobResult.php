<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models\Job;

use AlibabaCloud\Dara\Model;

class jobResult extends Model
{
    /**
     * @var string
     */
    public $resultLink;
    protected $_name = [
        'resultLink' => 'ResultLink',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resultLink) {
            $res['ResultLink'] = $this->resultLink;
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
        if (isset($map['ResultLink'])) {
            $model->resultLink = $map['ResultLink'];
        }

        return $model;
    }
}
