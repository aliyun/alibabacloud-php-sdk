<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationProcessDetailResponseBody\processDetails;

use AlibabaCloud\Dara\Model;

class checks extends Model
{
    /**
     * @var int
     */
    public $checkId;
    /**
     * @var string
     */
    public $checkShowName;
    protected $_name = [
        'checkId'       => 'CheckId',
        'checkShowName' => 'CheckShowName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkShowName) {
            $res['CheckShowName'] = $this->checkShowName;
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
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CheckShowName'])) {
            $model->checkShowName = $map['CheckShowName'];
        }

        return $model;
    }
}
