<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class RemoveVirusScanAdditionalListsRequest extends Model
{
    /**
     * @var string[]
     */
    public $listIds;
    protected $_name = [
        'listIds' => 'ListIds',
    ];

    public function validate()
    {
        if (\is_array($this->listIds)) {
            Model::validateArray($this->listIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
