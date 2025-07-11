<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody\additionalIngresses;

use AlibabaCloud\Tea\Model;

class portMappings extends Model
{
    /**
     * @var string
     */
    public $externalPort;

    /**
     * @var string
     */
    public $internalPort;
    protected $_name = [
        'externalPort' => 'ExternalPort',
        'internalPort' => 'InternalPort',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalPort) {
            $res['ExternalPort'] = $this->externalPort;
        }
        if (null !== $this->internalPort) {
            $res['InternalPort'] = $this->internalPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalPort'])) {
            $model->externalPort = $map['ExternalPort'];
        }
        if (isset($map['InternalPort'])) {
            $model->internalPort = $map['InternalPort'];
        }

        return $model;
    }
}
