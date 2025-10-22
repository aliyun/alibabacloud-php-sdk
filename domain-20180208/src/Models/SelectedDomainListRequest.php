<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

class SelectedDomainListRequest extends Model
{
    /**
     * @var string
     */
    public $listDate;
    protected $_name = [
        'listDate' => 'ListDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listDate) {
            $res['ListDate'] = $this->listDate;
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
        if (isset($map['ListDate'])) {
            $model->listDate = $map['ListDate'];
        }

        return $model;
    }
}
