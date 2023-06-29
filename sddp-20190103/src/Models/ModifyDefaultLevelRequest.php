<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class ModifyDefaultLevelRequest extends Model
{
    /**
     * @description The default sensitivity level of data that Data Security Center (DSC) cannot classify as sensitive or insensitive. Valid values:
     *
     *   **1**: N/A
     *   **2**: S1
     *   **3**: S2
     *   **4**: S3
     *   **5**: S4
     *
     * @example 4
     *
     * @var int
     */
    public $defaultId;

    /**
     * @description The language of the content within the request and response. Default value: **zh_cn**. Valid values:
     *
     *   **zh_cn**: Chinese
     *   **en_us**: English
     *
     * @example zh_cn
     *
     * @var string
     */
    public $lang;

    /**
     * @description The sensitivity level ID of data that DSC classifies as sensitive. Separate multiple IDs with commas (,). Valid values:
     *
     *   **1**: N/A
     *   **2**: S1
     *   **3**: S2
     *   **4**: S3
     *   **5**: S4
     *
     * @example 1,2,3,4
     *
     * @var string
     */
    public $sensitiveIds;
    protected $_name = [
        'defaultId'    => 'DefaultId',
        'lang'         => 'Lang',
        'sensitiveIds' => 'SensitiveIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultId) {
            $res['DefaultId'] = $this->defaultId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sensitiveIds) {
            $res['SensitiveIds'] = $this->sensitiveIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDefaultLevelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultId'])) {
            $model->defaultId = $map['DefaultId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SensitiveIds'])) {
            $model->sensitiveIds = $map['SensitiveIds'];
        }

        return $model;
    }
}
