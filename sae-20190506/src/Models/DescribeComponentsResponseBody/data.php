<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeComponentsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $componentDescription;

    /**
     * @var string
     */
    public $componentKey;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'componentDescription' => 'ComponentDescription',
        'componentKey' => 'ComponentKey',
        'expired' => 'Expired',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentDescription) {
            $res['ComponentDescription'] = $this->componentDescription;
        }

        if (null !== $this->componentKey) {
            $res['ComponentKey'] = $this->componentKey;
        }

        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ComponentDescription'])) {
            $model->componentDescription = $map['ComponentDescription'];
        }

        if (isset($map['ComponentKey'])) {
            $model->componentKey = $map['ComponentKey'];
        }

        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
