<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIJobResponseBody\data\jobSettings;

use AlibabaCloud\Tea\Model;

class ddlHandlingSettings extends Model
{
    /**
     * @example Critical
     *
     * @var string
     */
    public $action;

    /**
     * @example AddColumn
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'action' => 'Action',
        'type'   => 'Type',
    ];

    public function validate()
    {
    }

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
