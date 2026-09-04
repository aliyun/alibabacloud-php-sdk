<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class BatchRemoveOperatingObjectFavoritesRequest extends Model
{
    /**
     * @var string
     */
    public $graphName;

    /**
     * @var string[]
     */
    public $objectIds;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'graphName' => 'graphName',
        'objectIds' => 'objectIds',
        'objectType' => 'objectType',
        'operatingObjectName' => 'operatingObjectName',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->objectIds)) {
            Model::validateArray($this->objectIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->graphName) {
            $res['graphName'] = $this->graphName;
        }

        if (null !== $this->objectIds) {
            if (\is_array($this->objectIds)) {
                $res['objectIds'] = [];
                $n1 = 0;
                foreach ($this->objectIds as $item1) {
                    $res['objectIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->objectType) {
            $res['objectType'] = $this->objectType;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['graphName'])) {
            $model->graphName = $map['graphName'];
        }

        if (isset($map['objectIds'])) {
            if (!empty($map['objectIds'])) {
                $model->objectIds = [];
                $n1 = 0;
                foreach ($map['objectIds'] as $item1) {
                    $model->objectIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['objectType'])) {
            $model->objectType = $map['objectType'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
