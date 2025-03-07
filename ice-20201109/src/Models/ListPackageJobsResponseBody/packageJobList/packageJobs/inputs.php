<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListPackageJobsResponseBody\packageJobList\packageJobs;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListPackageJobsResponseBody\packageJobList\packageJobs\inputs\input;
use AlibabaCloud\Tea\Model;

class inputs extends Model
{
    /**
     * @description The information about the input stream file.
     *
     * @var input
     */
    public $input;
    protected $_name = [
        'input' => 'Input',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        return $model;
    }
}
