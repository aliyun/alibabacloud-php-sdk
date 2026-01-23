<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBelongAssetMappingRequest;

use AlibabaCloud\Dara\Model;

class assetMappingQuery extends Model
{
    /**
     * @var string
     */
    public $belongGuid;

    /**
     * @var string
     */
    public $relationType;
    protected $_name = [
        'belongGuid' => 'BelongGuid',
        'relationType' => 'RelationType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->belongGuid) {
            $res['BelongGuid'] = $this->belongGuid;
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
        if (isset($map['BelongGuid'])) {
            $model->belongGuid = $map['BelongGuid'];
        }

        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        return $model;
    }
}
