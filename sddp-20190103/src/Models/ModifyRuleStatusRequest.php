<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class ModifyRuleStatusRequest extends Model
{
    /**
     * @description The ID of the sensitive data detection rule.
     *
     * > You can query the ID of the sensitive data detection rule by calling the **DescribeRules** operation.
     * @example 12341
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the sensitive data detection rule. Separate multiple IDs with commas (,).
     *
     * > You can query the ID of the sensitive data detection rule by calling the **DescribeRules** operation.
     * @example 1,2,3,4
     *
     * @var string
     */
    public $ids;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description Specifies whether to enable or disable the sensitive data detection rule. Valid values:
     *
     *   **0**: disables the sensitive data detection rule.
     *   **1**: enables the sensitive data detection rule.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'id'     => 'Id',
        'ids'    => 'Ids',
        'lang'   => 'Lang',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRuleStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
