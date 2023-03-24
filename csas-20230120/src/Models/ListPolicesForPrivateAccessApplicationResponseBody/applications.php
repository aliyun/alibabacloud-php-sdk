<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessApplicationResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessApplicationResponseBody\applications\policies;
use AlibabaCloud\Tea\Model;

class applications extends Model
{
    /**
     * @example pa-application-b927baf3e592****
     *
     * @var string
     */
    public $applicationId;

    /**
     * @var policies[]
     */
    public $policies;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'policies'      => 'Policies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->policies) {
            $res['Policies'] = [];
            if (null !== $this->policies && \is_array($this->policies)) {
                $n = 0;
                foreach ($this->policies as $item) {
                    $res['Policies'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['Policies'])) {
            if (!empty($map['Policies'])) {
                $model->policies = [];
                $n               = 0;
                foreach ($map['Policies'] as $item) {
                    $model->policies[$n++] = null !== $item ? policies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
