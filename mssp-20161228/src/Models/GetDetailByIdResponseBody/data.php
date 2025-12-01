<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetDetailByIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetDetailByIdResponseBody\data\vulDetails;

class data extends Model
{
    /**
     * @var vulDetails[]
     */
    public $vulDetails;
    protected $_name = [
        'vulDetails' => 'VulDetails',
    ];

    public function validate()
    {
        if (\is_array($this->vulDetails)) {
            Model::validateArray($this->vulDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vulDetails) {
            if (\is_array($this->vulDetails)) {
                $res['VulDetails'] = [];
                $n1 = 0;
                foreach ($this->vulDetails as $item1) {
                    $res['VulDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VulDetails'])) {
            if (!empty($map['VulDetails'])) {
                $model->vulDetails = [];
                $n1 = 0;
                foreach ($map['VulDetails'] as $item1) {
                    $model->vulDetails[$n1] = vulDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
