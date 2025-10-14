<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSqlAuditInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $isEnabled;

    /**
     * @var string
     */
    public $SLSLogStore;

    /**
     * @var string
     */
    public $SLSProject;
    protected $_name = [
        'isEnabled' => 'IsEnabled',
        'SLSLogStore' => 'SLSLogStore',
        'SLSProject' => 'SLSProject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
        }

        if (null !== $this->SLSLogStore) {
            $res['SLSLogStore'] = $this->SLSLogStore;
        }

        if (null !== $this->SLSProject) {
            $res['SLSProject'] = $this->SLSProject;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }

        if (isset($map['SLSLogStore'])) {
            $model->SLSLogStore = $map['SLSLogStore'];
        }

        if (isset($map['SLSProject'])) {
            $model->SLSProject = $map['SLSProject'];
        }

        return $model;
    }
}
