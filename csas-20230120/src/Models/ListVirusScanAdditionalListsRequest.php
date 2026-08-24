<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListVirusScanAdditionalListsRequest extends Model
{
    /**
     * @var string[]
     */
    public $additionalTypes;

    /**
     * @var string
     */
    public $devType;

    /**
     * @var string
     */
    public $listDetail;

    /**
     * @var string[]
     */
    public $listIds;

    /**
     * @var string
     */
    public $listType;
    protected $_name = [
        'additionalTypes' => 'AdditionalTypes',
        'devType' => 'DevType',
        'listDetail' => 'ListDetail',
        'listIds' => 'ListIds',
        'listType' => 'ListType',
    ];

    public function validate()
    {
        if (\is_array($this->additionalTypes)) {
            Model::validateArray($this->additionalTypes);
        }
        if (\is_array($this->listIds)) {
            Model::validateArray($this->listIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalTypes) {
            if (\is_array($this->additionalTypes)) {
                $res['AdditionalTypes'] = [];
                $n1 = 0;
                foreach ($this->additionalTypes as $item1) {
                    $res['AdditionalTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->devType) {
            $res['DevType'] = $this->devType;
        }

        if (null !== $this->listDetail) {
            $res['ListDetail'] = $this->listDetail;
        }

        if (null !== $this->listIds) {
            if (\is_array($this->listIds)) {
                $res['ListIds'] = [];
                $n1 = 0;
                foreach ($this->listIds as $item1) {
                    $res['ListIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->listType) {
            $res['ListType'] = $this->listType;
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
        if (isset($map['AdditionalTypes'])) {
            if (!empty($map['AdditionalTypes'])) {
                $model->additionalTypes = [];
                $n1 = 0;
                foreach ($map['AdditionalTypes'] as $item1) {
                    $model->additionalTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DevType'])) {
            $model->devType = $map['DevType'];
        }

        if (isset($map['ListDetail'])) {
            $model->listDetail = $map['ListDetail'];
        }

        if (isset($map['ListIds'])) {
            if (!empty($map['ListIds'])) {
                $model->listIds = [];
                $n1 = 0;
                foreach ($map['ListIds'] as $item1) {
                    $model->listIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ListType'])) {
            $model->listType = $map['ListType'];
        }

        return $model;
    }
}
