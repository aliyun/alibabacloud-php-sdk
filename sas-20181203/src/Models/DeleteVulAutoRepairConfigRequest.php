<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteVulAutoRepairConfigRequest extends Model
{
    /**
     * @example RHSA-2017:0184-Important: mysql security update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @var int[]
     */
    public $configIdList;

    /**
     * @example cve
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasName'    => 'AliasName',
        'configIdList' => 'ConfigIdList',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->configIdList) {
            $res['ConfigIdList'] = $this->configIdList;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVulAutoRepairConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['ConfigIdList'])) {
            if (!empty($map['ConfigIdList'])) {
                $model->configIdList = $map['ConfigIdList'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
