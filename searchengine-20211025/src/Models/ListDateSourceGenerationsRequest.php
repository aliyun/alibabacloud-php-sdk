<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ListDateSourceGenerationsRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var bool
     */
    public $validStatus;
    protected $_name = [
        'domainName' => 'domainName',
        'validStatus' => 'validStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }

        if (null !== $this->validStatus) {
            $res['validStatus'] = $this->validStatus;
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
        if (isset($map['domainName'])) {
            $model->domainName = $map['domainName'];
        }

        if (isset($map['validStatus'])) {
            $model->validStatus = $map['validStatus'];
        }

        return $model;
    }
}
