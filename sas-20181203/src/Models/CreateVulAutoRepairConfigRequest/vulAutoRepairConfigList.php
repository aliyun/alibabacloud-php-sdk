<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateVulAutoRepairConfigRequest;

use AlibabaCloud\Tea\Model;

class vulAutoRepairConfigList extends Model
{
    /**
     * @description The alias of the vulnerability.
     *
     * This parameter is required.
     * @example CVE-2018-25032:zlib 1.2.11 memory corruption
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The name of the vulnerability.
     *
     * This parameter is required.
     * @example anolisos:8.4:ANSA-2022:0001
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'aliasName' => 'AliasName',
        'name'      => 'Name',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vulAutoRepairConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
