<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeHaVipsResponseBody\haVips;

use AlibabaCloud\Tea\Model;

class associatedEipAddresses extends Model
{
    /**
     * @description The EIP.
     *
     * @example 47.XX.XX.40
     *
     * @var string
     */
    public $eip;

    /**
     * @description The ID of the EIP.
     *
     * @example eip-5p1wz****
     *
     * @var string
     */
    public $eipId;
    protected $_name = [
        'eip'   => 'Eip',
        'eipId' => 'EipId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return associatedEipAddresses
     */
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
