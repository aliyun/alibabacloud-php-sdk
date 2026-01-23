<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAssetMappingRelationsRequest;

use AlibabaCloud\Dara\Model;

class assetMappingQuery extends Model
{
    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $guid;

    /**
     * @var string
     */
    public $relationType;
    protected $_name = [
        'assetType' => 'AssetType',
        'guid' => 'Guid',
        'relationType' => 'RelationType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
        }

        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
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
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
        }

        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        return $model;
    }
}
