<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CreateGadInstanceMemberResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $createCount;
    /**
     * @var string
     */
    public $gadInstanceName;
    protected $_name = [
        'createCount'     => 'CreateCount',
        'gadInstanceName' => 'GadInstanceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createCount) {
            $res['CreateCount'] = $this->createCount;
        }

        if (null !== $this->gadInstanceName) {
            $res['GadInstanceName'] = $this->gadInstanceName;
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
        if (isset($map['CreateCount'])) {
            $model->createCount = $map['CreateCount'];
        }

        if (isset($map['GadInstanceName'])) {
            $model->gadInstanceName = $map['GadInstanceName'];
        }

        return $model;
    }
}
