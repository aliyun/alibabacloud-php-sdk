<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeComponentAssetsResponseBody;

use AlibabaCloud\Tea\Model;

class componentAssets extends Model
{
    /**
     * @description The UUID of the asset.
     *
     * @example ff6fe161-93e2-464c-a326-fxxxxxx
     *
     * @var string
     */
    public $assetUuid;

    /**
     * @description The name of the component to which the asset belongs.
     *
     * @example pyhton3
     *
     * @var string
     */
    public $componentname;

    /**
     * @description The time when the asset was created. The time is in the yyyy-MM-ddTHH:mm:ssZ format and is displayed in UTC.
     *
     * @example 2023-03-23T14:38Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the asset was modified. The time is in the yyyy-MM-ddTHH:mm:ssZ format and is displayed in UTC.
     *
     * @example 2023-03-23T14:38Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The UUID of the asset.
     *
     * @example 7xx
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the asset.
     *
     * @example test asset
     *
     * @var string
     */
    public $name;

    /**
     * @description The configurations of the asset in the JSON string format. DescribeComponentAssetForm
     *
     * >  For more information, see [DescribeComponentAssetForm](~~DescribeComponentAssetForm~~).
     * @example [
     * ]
     * @var string
     */
    public $params;
    protected $_name = [
        'assetUuid'     => 'AssetUuid',
        'componentname' => 'Componentname',
        'gmtCreate'     => 'GmtCreate',
        'gmtModified'   => 'GmtModified',
        'id'            => 'Id',
        'name'          => 'Name',
        'params'        => 'Params',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return componentAssets
     */
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
