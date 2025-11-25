<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\saleInstanceList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\saleInstanceList\versionSummary\coreCount;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\saleInstanceList\versionSummary\ecsCount;

class versionSummary extends Model
{
    /**
     * @var string
     */
    public $authBindType;

    /**
     * @var coreCount
     */
    public $coreCount;

    /**
     * @var ecsCount
     */
    public $ecsCount;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'authBindType' => 'AuthBindType',
        'coreCount' => 'CoreCount',
        'ecsCount' => 'EcsCount',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->coreCount) {
            $this->coreCount->validate();
        }
        if (null !== $this->ecsCount) {
            $this->ecsCount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authBindType) {
            $res['AuthBindType'] = $this->authBindType;
        }

        if (null !== $this->coreCount) {
            $res['CoreCount'] = null !== $this->coreCount ? $this->coreCount->toArray($noStream) : $this->coreCount;
        }

        if (null !== $this->ecsCount) {
            $res['EcsCount'] = null !== $this->ecsCount ? $this->ecsCount->toArray($noStream) : $this->ecsCount;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AuthBindType'])) {
            $model->authBindType = $map['AuthBindType'];
        }

        if (isset($map['CoreCount'])) {
            $model->coreCount = coreCount::fromMap($map['CoreCount']);
        }

        if (isset($map['EcsCount'])) {
            $model->ecsCount = ecsCount::fromMap($map['EcsCount']);
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
