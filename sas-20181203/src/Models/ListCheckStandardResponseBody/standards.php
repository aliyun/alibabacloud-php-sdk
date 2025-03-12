<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckStandardResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckStandardResponseBody\standards\requirements;
use AlibabaCloud\Tea\Model;

class standards extends Model
{
    /**
     * @description The cloud service provider that uses the standard. Valid values:
     *
     *   **0**: Alibaba Cloud.
     *   **3**: Tencent Cloud.
     *   **4**: Huawei Cloud.
     *   **5**: Microsoft Azure.
     *   **7**: AWS.
     *
     * @example 3
     *
     * @var int
     */
    public $bindVendor;

    /**
     * @description The ID of the standard.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The requirements.
     *
     * @var requirements[]
     */
    public $requirements;

    /**
     * @description The display name of the check item.
     *
     * @example Identity and permission management
     *
     * @var string
     */
    public $showName;

    /**
     * @description The priority for display.
     *
     * @example 1
     *
     * @var int
     */
    public $showPriorityLevel;

    /**
     * @description The type of the standard.
     *
     * @example IDENTITY_PERMISSION
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bindVendor'        => 'BindVendor',
        'id'                => 'Id',
        'requirements'      => 'Requirements',
        'showName'          => 'ShowName',
        'showPriorityLevel' => 'ShowPriorityLevel',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindVendor) {
            $res['BindVendor'] = $this->bindVendor;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->requirements) {
            $res['Requirements'] = [];
            if (null !== $this->requirements && \is_array($this->requirements)) {
                $n = 0;
                foreach ($this->requirements as $item) {
                    $res['Requirements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->showPriorityLevel) {
            $res['ShowPriorityLevel'] = $this->showPriorityLevel;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return standards
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindVendor'])) {
            $model->bindVendor = $map['BindVendor'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Requirements'])) {
            if (!empty($map['Requirements'])) {
                $model->requirements = [];
                $n                   = 0;
                foreach ($map['Requirements'] as $item) {
                    $model->requirements[$n++] = null !== $item ? requirements::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['ShowPriorityLevel'])) {
            $model->showPriorityLevel = $map['ShowPriorityLevel'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
