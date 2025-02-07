<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationsResponseBody\applications\application;

class applications extends Model
{
    /**
     * @var application[]
     */
    public $application;
    protected $_name = [
        'application' => 'Application',
    ];

    public function validate()
    {
        if (\is_array($this->application)) {
            Model::validateArray($this->application);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->application) {
            if (\is_array($this->application)) {
                $res['Application'] = [];
                $n1                 = 0;
                foreach ($this->application as $item1) {
                    $res['Application'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Application'])) {
            if (!empty($map['Application'])) {
                $model->application = [];
                $n1                 = 0;
                foreach ($map['Application'] as $item1) {
                    $model->application[$n1++] = application::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
