<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerServiceK8sClusterKritisStatusResponseBody;

use AlibabaCloud\Tea\Model;

class kritisStatus extends Model
{
    /**
     * @description Indicates whether Kritis is installed. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $install;
    protected $_name = [
        'install' => 'Install',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->install) {
            $res['Install'] = $this->install;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return kritisStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Install'])) {
            $model->install = $map['Install'];
        }

        return $model;
    }
}
