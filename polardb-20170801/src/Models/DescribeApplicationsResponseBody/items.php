<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationsResponseBody\items\applications;

class items extends Model
{
    /**
     * @var applications[]
     */
    public $applications;
    protected $_name = [
        'applications' => 'Applications',
    ];

    public function validate()
    {
        if (\is_array($this->applications)) {
            Model::validateArray($this->applications);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applications) {
            if (\is_array($this->applications)) {
                $res['Applications'] = [];
                $n1 = 0;
                foreach ($this->applications as $item1) {
                    $res['Applications'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Applications'])) {
            if (!empty($map['Applications'])) {
                $model->applications = [];
                $n1 = 0;
                foreach ($map['Applications'] as $item1) {
                    $model->applications[$n1] = applications::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
