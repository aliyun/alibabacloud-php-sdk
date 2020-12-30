<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAppDailySdkVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class appDailySdkVersions extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $version;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'index'   => 'Index',
        'version' => 'Version',
        'count'   => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appDailySdkVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
