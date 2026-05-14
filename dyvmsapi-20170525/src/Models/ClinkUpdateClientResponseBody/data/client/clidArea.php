<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkUpdateClientResponseBody\data\client;

use AlibabaCloud\Dara\Model;

class clidArea extends Model
{
    /**
     * @var string
     */
    public $areaGroupName;

    /**
     * @var int
     */
    public $assignType;

    /**
     * @var string
     */
    public $dynamicTelGroupName;

    /**
     * @var string[]
     */
    public $obClids;
    protected $_name = [
        'areaGroupName' => 'AreaGroupName',
        'assignType' => 'AssignType',
        'dynamicTelGroupName' => 'DynamicTelGroupName',
        'obClids' => 'ObClids',
    ];

    public function validate()
    {
        if (\is_array($this->obClids)) {
            Model::validateArray($this->obClids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->areaGroupName) {
            $res['AreaGroupName'] = $this->areaGroupName;
        }

        if (null !== $this->assignType) {
            $res['AssignType'] = $this->assignType;
        }

        if (null !== $this->dynamicTelGroupName) {
            $res['DynamicTelGroupName'] = $this->dynamicTelGroupName;
        }

        if (null !== $this->obClids) {
            if (\is_array($this->obClids)) {
                $res['ObClids'] = [];
                $n1 = 0;
                foreach ($this->obClids as $item1) {
                    $res['ObClids'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AreaGroupName'])) {
            $model->areaGroupName = $map['AreaGroupName'];
        }

        if (isset($map['AssignType'])) {
            $model->assignType = $map['AssignType'];
        }

        if (isset($map['DynamicTelGroupName'])) {
            $model->dynamicTelGroupName = $map['DynamicTelGroupName'];
        }

        if (isset($map['ObClids'])) {
            if (!empty($map['ObClids'])) {
                $model->obClids = [];
                $n1 = 0;
                foreach ($map['ObClids'] as $item1) {
                    $model->obClids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
