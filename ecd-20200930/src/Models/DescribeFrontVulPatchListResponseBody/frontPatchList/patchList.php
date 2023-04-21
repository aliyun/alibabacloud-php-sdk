<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFrontVulPatchListResponseBody\frontPatchList;

use AlibabaCloud\Tea\Model;

class patchList extends Model
{
    /**
     * @description The alias of the vulnerability.
     *
     * @example 2021-02 servicing stack update for Windows Server 2016 (x64) systems (KB5001078)
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The name of the vulnerability.
     *
     * @example 5001078
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
     * @return patchList
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
