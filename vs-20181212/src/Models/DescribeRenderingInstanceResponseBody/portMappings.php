<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
