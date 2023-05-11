<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody\result;

use AlibabaCloud\Tea\Model;

class directory extends Model
{
    /**
     * @description Test directory
     *
     * @example a3eecab7-618d-4f9f-*****
     *
     * @var string
     */
    public $id;

    /**
     * @description Test directory
     *
     * @example The name of the directory.
     *
     * @var string
     */
    public $name;

    /**
     * @description The information about the directory to which the dataset belongs.
     *
     * @example 88b680****
     *
     * @var string
     */
    public $pathId;

    /**
     * @description The path of the directory ID, for example, aa/bb/cc/dd.
     *
     * @example The path name of the directory ID, for example, one-level directory /two-level directory.
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
