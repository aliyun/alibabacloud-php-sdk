<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeSoarRecordInOutputRequest extends Model
{
    /**
     * @description The UUID of the component action.
     *
     * >  You can call the [DescribeSoarTaskAndActions](~~DescribeSoarTaskAndActions~~) operation to query the UUIDs of component actions.
     * @example 0531ff66-dd05-4f24-84bf-xxxxxxxx
     *
     * @var string
     */
    public $actionUuid;

    /**
     * @description The language of the content within the request and the response. Valid values:
     *
     *   **zh** (default): Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'actionUuid' => 'ActionUuid',
        'lang'       => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionUuid) {
            $res['ActionUuid'] = $this->actionUuid;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSoarRecordInOutputRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionUuid'])) {
            $model->actionUuid = $map['ActionUuid'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
