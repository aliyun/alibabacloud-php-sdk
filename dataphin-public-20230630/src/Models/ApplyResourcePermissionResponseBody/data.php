<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ApplyResourcePermissionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $applyIds;

    /**
     * @var string[]
     */
    public $bpmsIds;
    protected $_name = [
        'applyIds' => 'ApplyIds',
        'bpmsIds' => 'BpmsIds',
    ];

    public function validate()
    {
        if (\is_array($this->applyIds)) {
            Model::validateArray($this->applyIds);
        }
        if (\is_array($this->bpmsIds)) {
            Model::validateArray($this->bpmsIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyIds) {
            if (\is_array($this->applyIds)) {
                $res['ApplyIds'] = [];
                $n1 = 0;
                foreach ($this->applyIds as $item1) {
                    $res['ApplyIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bpmsIds) {
            if (\is_array($this->bpmsIds)) {
                $res['BpmsIds'] = [];
                $n1 = 0;
                foreach ($this->bpmsIds as $item1) {
                    $res['BpmsIds'][$n1] = $item1;
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
        if (isset($map['ApplyIds'])) {
            if (!empty($map['ApplyIds'])) {
                $model->applyIds = [];
                $n1 = 0;
                foreach ($map['ApplyIds'] as $item1) {
                    $model->applyIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BpmsIds'])) {
            if (!empty($map['BpmsIds'])) {
                $model->bpmsIds = [];
                $n1 = 0;
                foreach ($map['BpmsIds'] as $item1) {
                    $model->bpmsIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
