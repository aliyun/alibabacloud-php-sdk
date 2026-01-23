<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardMappingRequest;

use AlibabaCloud\Dara\Model;

class createCommand extends Model
{
    /**
     * @var string[]
     */
    public $assetGuidList;

    /**
     * @var string
     */
    public $invalidMappingRelationOperationType;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var int
     */
    public $standardId;
    protected $_name = [
        'assetGuidList' => 'AssetGuidList',
        'invalidMappingRelationOperationType' => 'InvalidMappingRelationOperationType',
        'relationType' => 'RelationType',
        'standardId' => 'StandardId',
    ];

    public function validate()
    {
        if (\is_array($this->assetGuidList)) {
            Model::validateArray($this->assetGuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetGuidList) {
            if (\is_array($this->assetGuidList)) {
                $res['AssetGuidList'] = [];
                $n1 = 0;
                foreach ($this->assetGuidList as $item1) {
                    $res['AssetGuidList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->invalidMappingRelationOperationType) {
            $res['InvalidMappingRelationOperationType'] = $this->invalidMappingRelationOperationType;
        }

        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }

        if (null !== $this->standardId) {
            $res['StandardId'] = $this->standardId;
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
        if (isset($map['AssetGuidList'])) {
            if (!empty($map['AssetGuidList'])) {
                $model->assetGuidList = [];
                $n1 = 0;
                foreach ($map['AssetGuidList'] as $item1) {
                    $model->assetGuidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InvalidMappingRelationOperationType'])) {
            $model->invalidMappingRelationOperationType = $map['InvalidMappingRelationOperationType'];
        }

        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        if (isset($map['StandardId'])) {
            $model->standardId = $map['StandardId'];
        }

        return $model;
    }
}
