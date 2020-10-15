<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\ListApplicationsResponse;

use AlibabaCloud\SDK\Ens\V20171110\Models\ListApplicationsResponse\applications\application;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('application', $this->application, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->application) {
            $res['Application'] = [];
            if (null !== $this->application && \is_array($this->application)) {
                $n = 0;
                foreach ($this->application as $item) {
                    $res['Application'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Application'])) {
            if (!empty($map['Application'])) {
                $model->application = [];
                $n                  = 0;
                foreach ($map['Application'] as $item) {
                    $model->application[$n++] = null !== $item ? application::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
