<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosMcpServerResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosMcpServerResponseBody\data\remoteServerConfig\serviceRef;

class remoteServerConfig extends Model
{
    /**
     * @var string
     */
    public $exportPath;

    /**
     * @var serviceRef
     */
    public $serviceRef;
    protected $_name = [
        'exportPath' => 'ExportPath',
        'serviceRef' => 'ServiceRef',
    ];

    public function validate()
    {
        if (null !== $this->serviceRef) {
            $this->serviceRef->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exportPath) {
            $res['ExportPath'] = $this->exportPath;
        }

        if (null !== $this->serviceRef) {
            $res['ServiceRef'] = null !== $this->serviceRef ? $this->serviceRef->toArray($noStream) : $this->serviceRef;
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
        if (isset($map['ExportPath'])) {
            $model->exportPath = $map['ExportPath'];
        }

        if (isset($map['ServiceRef'])) {
            $model->serviceRef = serviceRef::fromMap($map['ServiceRef']);
        }

        return $model;
    }
}
