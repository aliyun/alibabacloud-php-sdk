<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class versionInfo extends Model
{
    /**
     * @var string
     */
    public $edition;

    /**
     * @var string[]
     */
    public $versions;
    protected $_name = [
        'edition'  => 'Edition',
        'versions' => 'Versions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->versions) {
            $res['Versions'] = $this->versions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['Versions'])) {
            if (!empty($map['Versions'])) {
                $model->versions = $map['Versions'];
            }
        }

        return $model;
    }
}
