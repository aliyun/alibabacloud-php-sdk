<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\StartK8sAppPrecheckResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The jobs and the details about the jobs.
     *
     * @var string[]
     */
    public $jobs;
    protected $_name = [
        'jobs' => 'Jobs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobs) {
            $res['Jobs'] = $this->jobs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Jobs'])) {
            if (!empty($map['Jobs'])) {
                $model->jobs = $map['Jobs'];
            }
        }

        return $model;
    }
}
