<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetDestinationCidrBlockResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description List of destination CIDR block information for the current network instance
     *
     * @var string[]
     */
    public $destinationCidrBlock;
    protected $_name = [
        'destinationCidrBlock' => 'DestinationCidrBlock',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationCidrBlock'])) {
            if (!empty($map['DestinationCidrBlock'])) {
                $model->destinationCidrBlock = $map['DestinationCidrBlock'];
            }
        }

        return $model;
    }
}
