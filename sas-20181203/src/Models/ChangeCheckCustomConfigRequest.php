<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckCustomConfigRequest\customConfigs;
use AlibabaCloud\Tea\Model;

class ChangeCheckCustomConfigRequest extends Model
{
    /**
     * @description The ID of the check item.
     *
     * > You can call the [ListCheckResult](~~ListCheckResult~~) operation to query the IDs of check items.
     * @example 76
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The custom configuration items of the check item.
     *
     * @var customConfigs[]
     */
    public $customConfigs;

    /**
     * @description The region where the Security Center instance is deployed. Valid values:
     *
     *   **cn-hangzhou**: International
     *   **ap-southeast-1**: Singapore
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'checkId'       => 'CheckId',
        'customConfigs' => 'CustomConfigs',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->customConfigs) {
            $res['CustomConfigs'] = [];
            if (null !== $this->customConfigs && \is_array($this->customConfigs)) {
                $n = 0;
                foreach ($this->customConfigs as $item) {
                    $res['CustomConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeCheckCustomConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CustomConfigs'])) {
            if (!empty($map['CustomConfigs'])) {
                $model->customConfigs = [];
                $n                    = 0;
                foreach ($map['CustomConfigs'] as $item) {
                    $model->customConfigs[$n++] = null !== $item ? customConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
