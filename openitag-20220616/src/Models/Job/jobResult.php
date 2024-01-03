<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models\Job;

use AlibabaCloud\Tea\Model;

class jobResult extends Model
{
    /**
     * @var string
     */
    public $resultLink;
    protected $_name = [
        'resultLink' => 'ResultLink',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultLink) {
            $res['ResultLink'] = $this->resultLink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResultLink'])) {
            $model->resultLink = $map['ResultLink'];
        }

        return $model;
    }
}
