<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetListResponseBody\result\data;

use AlibabaCloud\Tea\Model;

class directory extends Model
{
    /**
     * @description The ID of the directory path.
     *
     * @example schemaad8aad00-9c55-4984-a767-b4e0ec60****
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the data source.
     *
     * @example Information about the directory where the dataset is located
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the data source.
     *
     * @example schemaad8aad00-9c55-4984-a767-b4e0ec60****
     *
     * @var string
     */
    public $pathId;

    /**
     * @description The name of the data source.
     *
     * @example Test a data source
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
