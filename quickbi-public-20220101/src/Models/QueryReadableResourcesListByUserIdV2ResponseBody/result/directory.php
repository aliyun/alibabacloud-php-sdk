<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryReadableResourcesListByUserIdV2ResponseBody\result;

use AlibabaCloud\Dara\Model;

class directory extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pathId;

    /**
     * @var string
     */
    public $pathName;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
        'pathId' => 'PathId',
        'pathName' => 'PathName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pathId) {
            $res['PathId'] = $this->pathId;
        }

        if (null !== $this->pathName) {
            $res['PathName'] = $this->pathName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PathId'])) {
            $model->pathId = $map['PathId'];
        }

        if (isset($map['PathName'])) {
            $model->pathName = $map['PathName'];
        }

        return $model;
    }
}
