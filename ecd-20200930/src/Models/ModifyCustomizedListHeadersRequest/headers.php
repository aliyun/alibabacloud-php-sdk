<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCustomizedListHeadersRequest;

use AlibabaCloud\Dara\Model;

class headers extends Model
{
    /**
     * @var string
     */
    public $displayType;
    /**
     * @var string
     */
    public $headerKey;
    protected $_name = [
        'displayType' => 'DisplayType',
        'headerKey'   => 'HeaderKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayType) {
            $res['DisplayType'] = $this->displayType;
        }

        if (null !== $this->headerKey) {
            $res['HeaderKey'] = $this->headerKey;
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
        if (isset($map['DisplayType'])) {
            $model->displayType = $map['DisplayType'];
        }

        if (isset($map['HeaderKey'])) {
            $model->headerKey = $map['HeaderKey'];
        }

        return $model;
    }
}
