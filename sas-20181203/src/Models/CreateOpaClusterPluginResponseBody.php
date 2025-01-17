<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateOpaClusterPluginResponseBody\installStatus;

class CreateOpaClusterPluginResponseBody extends Model
{
    /**
     * @var installStatus[]
     */
    public $installStatus;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'installStatus' => 'InstallStatus',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->installStatus)) {
            Model::validateArray($this->installStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->installStatus) {
            if (\is_array($this->installStatus)) {
                $res['InstallStatus'] = [];
                $n1                   = 0;
                foreach ($this->installStatus as $item1) {
                    $res['InstallStatus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstallStatus'])) {
            if (!empty($map['InstallStatus'])) {
                $model->installStatus = [];
                $n1                   = 0;
                foreach ($map['InstallStatus'] as $item1) {
                    $model->installStatus[$n1++] = installStatus::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
