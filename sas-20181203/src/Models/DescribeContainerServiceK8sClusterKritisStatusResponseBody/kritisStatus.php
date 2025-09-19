<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerServiceK8sClusterKritisStatusResponseBody;

use AlibabaCloud\Dara\Model;

class kritisStatus extends Model
{
    /**
     * @var bool
     */
    public $install;
    protected $_name = [
        'install' => 'Install',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->install) {
            $res['Install'] = $this->install;
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
        if (isset($map['Install'])) {
            $model->install = $map['Install'];
        }

        return $model;
    }
}
