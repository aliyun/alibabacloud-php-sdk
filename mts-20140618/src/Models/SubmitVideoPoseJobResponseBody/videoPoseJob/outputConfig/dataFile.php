<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponseBody\videoPoseJob\outputConfig;

use AlibabaCloud\Tea\Model;

class dataFile extends Model
{
    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $bucket;
    protected $_name = [
        'roleArn'  => 'RoleArn',
        'object'   => 'Object',
        'location' => 'Location',
        'bucket'   => 'Bucket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        return $model;
    }
}
