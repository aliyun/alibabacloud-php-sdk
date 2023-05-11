<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QuerySharesToUserListResponseBody\result;

use AlibabaCloud\Tea\Model;

class directory extends Model
{
    /**
     * @description The ID of the directory where the resource is located.
     *
     * @example f7f6e22b-83be-47fd-b49d-9ca686a9****
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the resource.
     *
     * @example Chart Report
     *
     * @var string
     */
    public $name;

    /**
     * @description The path ID of the directory where the resource is located.
     *
     * @example 66ffe22b-83be-47fd-b49d-9ca58d29****\/f7f6e22b-83be-47fd-b49d-9ca686a9****
     *
     * @var string
     */
    public $pathId;

    /**
     * @description The path name of the directory where the resource is located.
     *
     * @example Level -1 Directory /Level -2 Directory
     *
     * @var string
     */
    public $pathName;
    protected $_name = [
        'id'       => 'Id',
        'name'     => 'Name',
        'pathId'   => 'PathId',
        'pathName' => 'PathName',
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
        if (null !== $this->pathId) {
            $res['PathId'] = $this->pathId;
        }
        if (null !== $this->pathName) {
            $res['PathName'] = $this->pathName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return directory
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
        if (isset($map['PathId'])) {
            $model->pathId = $map['PathId'];
        }
        if (isset($map['PathName'])) {
            $model->pathName = $map['PathName'];
        }

        return $model;
    }
}
