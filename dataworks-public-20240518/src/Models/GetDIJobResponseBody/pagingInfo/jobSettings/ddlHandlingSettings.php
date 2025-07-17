<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\jobSettings;

use AlibabaCloud\Tea\Model;

class ddlHandlingSettings extends Model
{
    /**
     * @description The processing policy for a specific type of DDL message. Valid values:
     *
     *   Ignore: ignores a DDL message.
     *   Critical: reports an error for a DDL message.
     *   Normal: normally processes a DDL message.
     *
     * @example Ignore
     *
     * @var string
     */
    public $action;

    /**
     * @description The DDL operation type. Valid values:
     *
     *   RenameColumn
     *   ModifyColumn
     *   CreateTable
     *   TruncateTable
     *   DropTable
     *
     * @example CreateTable
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'action' => 'Action',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ddlHandlingSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
