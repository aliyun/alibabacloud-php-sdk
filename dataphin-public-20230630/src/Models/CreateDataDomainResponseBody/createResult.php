<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataDomainResponseBody;

use AlibabaCloud\Dara\Model;

class createResult extends Model
{
    /**
     * @var int
     */
    public $dataDomainId;
    protected $_name = [
        'dataDomainId' => 'DataDomainId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDomainId) {
            $res['DataDomainId'] = $this->dataDomainId;
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
        if (isset($map['DataDomainId'])) {
            $model->dataDomainId = $map['DataDomainId'];
        }

        return $model;
    }
}
