<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\routeSetting;

use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\routeSetting\routes\conditions;
use AlibabaCloud\Tea\Model;

class routes extends Model
{
    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @var string
     */
    public $escalationUuid;
    protected $_name = [
        'conditions'     => 'Conditions',
        'escalationUuid' => 'EscalationUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['Conditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->escalationUuid) {
            $res['EscalationUuid'] = $this->escalationUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n                 = 0;
                foreach ($map['Conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? conditions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EscalationUuid'])) {
            $model->escalationUuid = $map['EscalationUuid'];
        }

        return $model;
    }
}
