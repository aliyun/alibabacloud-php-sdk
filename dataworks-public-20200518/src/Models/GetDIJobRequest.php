<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class GetDIJobRequest extends Model
{
    /**
     * @var int
     */
    public $DIJobId;
    /**
     * @var bool
     */
    public $withDetails;
    protected $_name = [
        'DIJobId'     => 'DIJobId',
        'withDetails' => 'WithDetails',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }

        if (null !== $this->withDetails) {
            $res['WithDetails'] = $this->withDetails;
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
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }

        if (isset($map['WithDetails'])) {
            $model->withDetails = $map['WithDetails'];
        }

        return $model;
    }
}
