<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\QueryJobListResponseBody\jobList\job\output\outSubtitleList\outSubtitle;

use AlibabaCloud\Tea\Model;

class outSubtitleFile extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'bucket'   => 'Bucket',
        'location' => 'Location',
        'object'   => 'Object',
        'roleArn'  => 'RoleArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outSubtitleFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        return $model;
    }
}
