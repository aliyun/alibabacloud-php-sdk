<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeComponentAssetsResponseBody;

use AlibabaCloud\Dara\Model;

class componentAssets extends Model
{
    /**
     * @var string
     */
    public $assetUuid;

    /**
     * @var string
     */
    public $componentname;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $params;
    protected $_name = [
        'assetUuid' => 'AssetUuid',
        'componentname' => 'Componentname',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'name' => 'Name',
        'params' => 'Params',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetUuid) {
            $res['AssetUuid'] = $this->assetUuid;
        }

        if (null !== $this->componentname) {
            $res['Componentname'] = $this->componentname;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
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
        if (isset($map['AssetUuid'])) {
            $model->assetUuid = $map['AssetUuid'];
        }

        if (isset($map['Componentname'])) {
            $model->componentname = $map['Componentname'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        return $model;
    }
}
