<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFrontVulPatchListResponseBody\frontPatchList;

use AlibabaCloud\Tea\Model;

class patchList extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $aliasName;
    protected $_name = [
        'name'      => 'Name',
        'aliasName' => 'AliasName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        return $model;
    }
}
