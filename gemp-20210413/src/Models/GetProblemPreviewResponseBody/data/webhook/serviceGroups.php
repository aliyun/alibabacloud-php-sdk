<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody\data\webhook;

use AlibabaCloud\Tea\Model;

class serviceGroups extends Model
{
    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'serviceName' => 'serviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
