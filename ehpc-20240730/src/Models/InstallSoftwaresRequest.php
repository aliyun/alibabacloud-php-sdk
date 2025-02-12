<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\InstallSoftwaresRequest\additionalPackages;

class InstallSoftwaresRequest extends Model
{
    /**
     * @var additionalPackages[]
     */
    public $additionalPackages;
    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'additionalPackages' => 'AdditionalPackages',
        'clusterId'          => 'ClusterId',
    ];

    public function validate()
    {
        if (\is_array($this->additionalPackages)) {
            Model::validateArray($this->additionalPackages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalPackages) {
            if (\is_array($this->additionalPackages)) {
                $res['AdditionalPackages'] = [];
                $n1                        = 0;
                foreach ($this->additionalPackages as $item1) {
                    $res['AdditionalPackages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (isset($map['AdditionalPackages'])) {
            if (!empty($map['AdditionalPackages'])) {
                $model->additionalPackages = [];
                $n1                        = 0;
                foreach ($map['AdditionalPackages'] as $item1) {
                    $model->additionalPackages[$n1++] = additionalPackages::fromMap($item1);
                }
            }
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
