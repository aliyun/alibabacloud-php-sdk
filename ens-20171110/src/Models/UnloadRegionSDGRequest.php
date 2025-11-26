<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class UnloadRegionSDGRequest extends Model
{
    /**
     * @var string[]
     */
    public $destinationRegionIds;

    /**
     * @var string[]
     */
    public $namespaces;

    /**
     * @var string
     */
    public $SDGId;
    protected $_name = [
        'destinationRegionIds' => 'DestinationRegionIds',
        'namespaces' => 'Namespaces',
        'SDGId' => 'SDGId',
    ];

    public function validate()
    {
        if (\is_array($this->destinationRegionIds)) {
            Model::validateArray($this->destinationRegionIds);
        }
        if (\is_array($this->namespaces)) {
            Model::validateArray($this->namespaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationRegionIds) {
            if (\is_array($this->destinationRegionIds)) {
                $res['DestinationRegionIds'] = [];
                $n1 = 0;
                foreach ($this->destinationRegionIds as $item1) {
                    $res['DestinationRegionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->namespaces) {
            if (\is_array($this->namespaces)) {
                $res['Namespaces'] = [];
                $n1 = 0;
                foreach ($this->namespaces as $item1) {
                    $res['Namespaces'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
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
        if (isset($map['DestinationRegionIds'])) {
            if (!empty($map['DestinationRegionIds'])) {
                $model->destinationRegionIds = [];
                $n1 = 0;
                foreach ($map['DestinationRegionIds'] as $item1) {
                    $model->destinationRegionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Namespaces'])) {
            if (!empty($map['Namespaces'])) {
                $model->namespaces = [];
                $n1 = 0;
                foreach ($map['Namespaces'] as $item1) {
                    $model->namespaces[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }

        return $model;
    }
}
