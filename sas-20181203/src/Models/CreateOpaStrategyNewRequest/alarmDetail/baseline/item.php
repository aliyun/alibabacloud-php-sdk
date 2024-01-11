<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateOpaStrategyNewRequest\alarmDetail\baseline;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description The ID of the baseline check item.
     *
     * >  You can call the [GetOpaClusterBaseLineList](~~2539883~~) operation to query the ID of the baseline check item.
     * @example hc.image.checklist.identify.hc_exploit_couchdb_linux.item
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the baseline check item.
     *
     * >  You can call the [GetOpaClusterBaseLineList](~~2539883~~) operation to query the name of the baseline check item.
     * @example Unauthorized access to CouchDB configuration risk
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'id'   => 'Id',
        'name' => 'Name',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
