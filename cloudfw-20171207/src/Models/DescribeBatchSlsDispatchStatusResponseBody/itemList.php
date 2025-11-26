<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeBatchSlsDispatchStatusResponseBody;

use AlibabaCloud\Dara\Model;

class itemList extends Model
{
    /**
     * @var string
     */
    public $configStatus;

    /**
     * @var string
     */
    public $dispatchName;

    /**
     * @var string
     */
    public $dispatchValue;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string[]
     */
    public $filterKeys;

    /**
     * @var string
     */
    public $searchName;
    protected $_name = [
        'configStatus' => 'ConfigStatus',
        'dispatchName' => 'DispatchName',
        'dispatchValue' => 'DispatchValue',
        'enable' => 'Enable',
        'filterKeys' => 'FilterKeys',
        'searchName' => 'SearchName',
    ];

    public function validate()
    {
        if (\is_array($this->filterKeys)) {
            Model::validateArray($this->filterKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configStatus) {
            $res['ConfigStatus'] = $this->configStatus;
        }

        if (null !== $this->dispatchName) {
            $res['DispatchName'] = $this->dispatchName;
        }

        if (null !== $this->dispatchValue) {
            $res['DispatchValue'] = $this->dispatchValue;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->filterKeys) {
            if (\is_array($this->filterKeys)) {
                $res['FilterKeys'] = [];
                $n1 = 0;
                foreach ($this->filterKeys as $item1) {
                    $res['FilterKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
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
        if (isset($map['ConfigStatus'])) {
            $model->configStatus = $map['ConfigStatus'];
        }

        if (isset($map['DispatchName'])) {
            $model->dispatchName = $map['DispatchName'];
        }

        if (isset($map['DispatchValue'])) {
            $model->dispatchValue = $map['DispatchValue'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['FilterKeys'])) {
            if (!empty($map['FilterKeys'])) {
                $model->filterKeys = [];
                $n1 = 0;
                foreach ($map['FilterKeys'] as $item1) {
                    $model->filterKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }

        return $model;
    }
}
