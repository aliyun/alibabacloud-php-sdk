<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Location\V20150612\Models\DescribeEndpointResponseBody;

use AlibabaCloud\Tea\Model;

class protocols extends Model
{
    /**
     * @var string[]
     */
    public $protocols;
    protected $_name = [
        'protocols' => 'Protocols',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protocols) {
            $res['Protocols'] = $this->protocols;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return protocols
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = $map['Protocols'];
            }
        }

        return $model;
    }
}
