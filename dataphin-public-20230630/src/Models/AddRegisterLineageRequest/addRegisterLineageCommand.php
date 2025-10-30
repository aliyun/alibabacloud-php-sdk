<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddRegisterLineageRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddRegisterLineageRequest\addRegisterLineageCommand\detailedLineages;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddRegisterLineageRequest\addRegisterLineageCommand\source;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddRegisterLineageRequest\addRegisterLineageCommand\target;

class addRegisterLineageCommand extends Model
{
    /**
     * @var bool
     */
    public $checkAssetExist;

    /**
     * @var detailedLineages[]
     */
    public $detailedLineages;

    /**
     * @var mixed[]
     */
    public $relationProperties;

    /**
     * @var source
     */
    public $source;

    /**
     * @var target
     */
    public $target;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'checkAssetExist' => 'CheckAssetExist',
        'detailedLineages' => 'DetailedLineages',
        'relationProperties' => 'RelationProperties',
        'source' => 'Source',
        'target' => 'Target',
        'tenantId' => 'TenantId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->detailedLineages)) {
            Model::validateArray($this->detailedLineages);
        }
        if (\is_array($this->relationProperties)) {
            Model::validateArray($this->relationProperties);
        }
        if (null !== $this->source) {
            $this->source->validate();
        }
        if (null !== $this->target) {
            $this->target->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkAssetExist) {
            $res['CheckAssetExist'] = $this->checkAssetExist;
        }

        if (null !== $this->detailedLineages) {
            if (\is_array($this->detailedLineages)) {
                $res['DetailedLineages'] = [];
                $n1 = 0;
                foreach ($this->detailedLineages as $item1) {
                    $res['DetailedLineages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relationProperties) {
            if (\is_array($this->relationProperties)) {
                $res['RelationProperties'] = [];
                foreach ($this->relationProperties as $key1 => $value1) {
                    $res['RelationProperties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
        }

        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toArray($noStream) : $this->target;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['CheckAssetExist'])) {
            $model->checkAssetExist = $map['CheckAssetExist'];
        }

        if (isset($map['DetailedLineages'])) {
            if (!empty($map['DetailedLineages'])) {
                $model->detailedLineages = [];
                $n1 = 0;
                foreach ($map['DetailedLineages'] as $item1) {
                    $model->detailedLineages[$n1] = detailedLineages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RelationProperties'])) {
            if (!empty($map['RelationProperties'])) {
                $model->relationProperties = [];
                foreach ($map['RelationProperties'] as $key1 => $value1) {
                    $model->relationProperties[$key1] = $value1;
                }
            }
        }

        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
        }

        if (isset($map['Target'])) {
            $model->target = target::fromMap($map['Target']);
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
