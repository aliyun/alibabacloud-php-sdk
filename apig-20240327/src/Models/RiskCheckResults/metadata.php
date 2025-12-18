<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\RiskCheckResults;

use AlibabaCloud\Dara\Model;

class metadata extends Model
{
    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var int
     */
    public $replica;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'clusterType' => 'clusterType',
        'replica' => 'replica',
        'spec' => 'spec',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['clusterType'] = $this->clusterType;
        }

        if (null !== $this->replica) {
            $res['replica'] = $this->replica;
        }

        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['clusterType'])) {
            $model->clusterType = $map['clusterType'];
        }

        if (isset($map['replica'])) {
            $model->replica = $map['replica'];
        }

        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
