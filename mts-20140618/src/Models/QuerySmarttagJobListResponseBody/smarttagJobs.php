<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QuerySmarttagJobListResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySmarttagJobListResponseBody\smarttagJobs\smarttagJob;
use AlibabaCloud\Tea\Model;

class smarttagJobs extends Model
{
    /**
     * @var smarttagJob[]
     */
    public $smarttagJob;
    protected $_name = [
        'smarttagJob' => 'SmarttagJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->smarttagJob) {
            $res['SmarttagJob'] = [];
            if (null !== $this->smarttagJob && \is_array($this->smarttagJob)) {
                $n = 0;
                foreach ($this->smarttagJob as $item) {
                    $res['SmarttagJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smarttagJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SmarttagJob'])) {
            if (!empty($map['SmarttagJob'])) {
                $model->smarttagJob = [];
                $n                  = 0;
                foreach ($map['SmarttagJob'] as $item) {
                    $model->smarttagJob[$n++] = null !== $item ? smarttagJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
