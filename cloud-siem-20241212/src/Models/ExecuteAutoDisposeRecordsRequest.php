<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ExecuteAutoDisposeRecordsRequest\selectedEntityList;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ExecuteAutoDisposeRecordsRequest\unSelectedEntityList;

class ExecuteAutoDisposeRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var selectedEntityList[]
     */
    public $selectedEntityList;

    /**
     * @var unSelectedEntityList[]
     */
    public $unSelectedEntityList;
    protected $_name = [
        'lang' => 'Lang',
        'selectedEntityList' => 'SelectedEntityList',
        'unSelectedEntityList' => 'UnSelectedEntityList',
    ];

    public function validate()
    {
        if (\is_array($this->selectedEntityList)) {
            Model::validateArray($this->selectedEntityList);
        }
        if (\is_array($this->unSelectedEntityList)) {
            Model::validateArray($this->unSelectedEntityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->selectedEntityList) {
            if (\is_array($this->selectedEntityList)) {
                $res['SelectedEntityList'] = [];
                $n1 = 0;
                foreach ($this->selectedEntityList as $item1) {
                    $res['SelectedEntityList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->unSelectedEntityList) {
            if (\is_array($this->unSelectedEntityList)) {
                $res['UnSelectedEntityList'] = [];
                $n1 = 0;
                foreach ($this->unSelectedEntityList as $item1) {
                    $res['UnSelectedEntityList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['SelectedEntityList'])) {
            if (!empty($map['SelectedEntityList'])) {
                $model->selectedEntityList = [];
                $n1 = 0;
                foreach ($map['SelectedEntityList'] as $item1) {
                    $model->selectedEntityList[$n1] = selectedEntityList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UnSelectedEntityList'])) {
            if (!empty($map['UnSelectedEntityList'])) {
                $model->unSelectedEntityList = [];
                $n1 = 0;
                foreach ($map['UnSelectedEntityList'] as $item1) {
                    $model->unSelectedEntityList[$n1] = unSelectedEntityList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
