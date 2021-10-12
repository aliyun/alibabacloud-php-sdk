<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSqlAuditInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $SLSLogStore;

    /**
     * @var string
     */
    public $SLSProject;

    /**
     * @var bool
     */
    public $isEnabled;
    protected $_name = [
        'SLSLogStore' => 'SLSLogStore',
        'SLSProject'  => 'SLSProject',
        'isEnabled'   => 'IsEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SLSLogStore) {
            $res['SLSLogStore'] = $this->SLSLogStore;
        }
        if (null !== $this->SLSProject) {
            $res['SLSProject'] = $this->SLSProject;
        }
        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
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
        if (isset($map['SLSLogStore'])) {
            $model->SLSLogStore = $map['SLSLogStore'];
        }
        if (isset($map['SLSProject'])) {
            $model->SLSProject = $map['SLSProject'];
        }
        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }

        return $model;
    }
}
