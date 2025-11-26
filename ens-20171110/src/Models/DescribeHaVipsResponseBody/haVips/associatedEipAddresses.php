<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeHaVipsResponseBody\haVips;

use AlibabaCloud\Dara\Model;

class associatedEipAddresses extends Model
{
    /**
     * @var string
     */
    public $eip;

    /**
     * @var string
     */
    public $eipId;
    protected $_name = [
        'eip' => 'Eip',
        'eipId' => 'EipId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }

        if (null !== $this->eipId) {
            $res['EipId'] = $this->eipId;
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
        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }

        if (isset($map['EipId'])) {
            $model->eipId = $map['EipId'];
        }

        return $model;
    }
}
