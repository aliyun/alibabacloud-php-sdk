<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAssetCleanConfigRequest;

use AlibabaCloud\Tea\Model;

class assetCleanConfigs extends Model
{
    /**
     * @description The number of days before hosts whose provider cannot be identified are automatically cleaned after they enter the offline state. Valid value: an integer that ranges from 1 to 30.
     *
     * @example 7
     *
     * @var int
     */
    public $cleanDays;

    /**
     * @description Specifies whether to enable the feature of cleaning the offline hosts whose provider cannot be identified. Valid values:
     *
     *   **0**: disables the feature.
     *   **1**: enables the feature.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The type of hosts that you want to clean.
     *
     * Set the value to **1**, which indicates hosts whose provider cannot be identified.
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'cleanDays' => 'CleanDays',
        'status'    => 'Status',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cleanDays) {
            $res['CleanDays'] = $this->cleanDays;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assetCleanConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CleanDays'])) {
            $model->cleanDays = $map['CleanDays'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
