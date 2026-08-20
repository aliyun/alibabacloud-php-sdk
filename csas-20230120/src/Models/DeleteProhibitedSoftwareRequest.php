<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class DeleteProhibitedSoftwareRequest extends Model
{
    /**
     * @var string[]
     */
    public $softwareIds;
    protected $_name = [
        'softwareIds' => 'SoftwareIds',
    ];

    public function validate()
    {
        if (\is_array($this->softwareIds)) {
            Model::validateArray($this->softwareIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->softwareIds) {
            if (\is_array($this->softwareIds)) {
                $res['SoftwareIds'] = [];
                $n1 = 0;
                foreach ($this->softwareIds as $item1) {
                    $res['SoftwareIds'][$n1] = $item1;
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
        if (isset($map['SoftwareIds'])) {
            if (!empty($map['SoftwareIds'])) {
                $model->softwareIds = [];
                $n1 = 0;
                foreach ($map['SoftwareIds'] as $item1) {
                    $model->softwareIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
