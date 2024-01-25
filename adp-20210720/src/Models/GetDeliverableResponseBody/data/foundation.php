<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetDeliverableResponseBody\data;

use AlibabaCloud\Tea\Model;

class foundation extends Model
{
    /**
     * @var string
     */
    public $clusterConfig;

    /**
     * @example d4b3b7a4-53cc-4a8e-b500-f6ade9509eb1
     *
     * @var string
     */
    public $foundationReferenceUID;

    /**
     * @example 1.4.2
     *
     * @var string
     */
    public $foundationVersion;

    /**
     * @example b1a4f675-7c2c-4b98-a480-73d272ec4a9b
     *
     * @var string
     */
    public $foundationVersionUID;
    protected $_name = [
        'clusterConfig'          => 'clusterConfig',
        'foundationReferenceUID' => 'foundationReferenceUID',
        'foundationVersion'      => 'foundationVersion',
        'foundationVersionUID'   => 'foundationVersionUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterConfig) {
            $res['clusterConfig'] = $this->clusterConfig;
        }
        if (null !== $this->foundationReferenceUID) {
            $res['foundationReferenceUID'] = $this->foundationReferenceUID;
        }
        if (null !== $this->foundationVersion) {
            $res['foundationVersion'] = $this->foundationVersion;
        }
        if (null !== $this->foundationVersionUID) {
            $res['foundationVersionUID'] = $this->foundationVersionUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return foundation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterConfig'])) {
            $model->clusterConfig = $map['clusterConfig'];
        }
        if (isset($map['foundationReferenceUID'])) {
            $model->foundationReferenceUID = $map['foundationReferenceUID'];
        }
        if (isset($map['foundationVersion'])) {
            $model->foundationVersion = $map['foundationVersion'];
        }
        if (isset($map['foundationVersionUID'])) {
            $model->foundationVersionUID = $map['foundationVersionUID'];
        }

        return $model;
    }
}
