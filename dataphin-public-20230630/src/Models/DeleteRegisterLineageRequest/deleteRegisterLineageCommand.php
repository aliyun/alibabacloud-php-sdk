<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteRegisterLineageRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteRegisterLineageRequest\deleteRegisterLineageCommand\detailedLineages;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteRegisterLineageRequest\deleteRegisterLineageCommand\source;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteRegisterLineageRequest\deleteRegisterLineageCommand\target;

class deleteRegisterLineageCommand extends Model
{
    /**
     * @var bool
     */
    public $cascadeDeleteLineage;

    /**
     * @var detailedLineages[]
     */
    public $detailedLineages;

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
        'cascadeDeleteLineage' => 'CascadeDeleteLineage',
        'detailedLineages' => 'DetailedLineages',
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
        if (null !== $this->cascadeDeleteLineage) {
            $res['CascadeDeleteLineage'] = $this->cascadeDeleteLineage;
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
        if (isset($map['CascadeDeleteLineage'])) {
            $model->cascadeDeleteLineage = $map['CascadeDeleteLineage'];
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
