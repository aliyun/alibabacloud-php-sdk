<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAuthSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class postPaidVersionSummary extends Model
{
    /**
     * @var string
     */
    public $authBindType;

    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $usedCoreCount;

    /**
     * @var int
     */
    public $usedEcsCount;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'authBindType' => 'AuthBindType',
        'index' => 'Index',
        'usedCoreCount' => 'UsedCoreCount',
        'usedEcsCount' => 'UsedEcsCount',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authBindType) {
            $res['AuthBindType'] = $this->authBindType;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->usedCoreCount) {
            $res['UsedCoreCount'] = $this->usedCoreCount;
        }

        if (null !== $this->usedEcsCount) {
            $res['UsedEcsCount'] = $this->usedEcsCount;
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

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['UsedCoreCount'])) {
            $model->usedCoreCount = $map['UsedCoreCount'];
        }

        if (isset($map['UsedEcsCount'])) {
            $model->usedEcsCount = $map['UsedEcsCount'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
