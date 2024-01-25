<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetFoundationReferenceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $clusterConfig;

    /**
     * @example b1b528a6-8341-4f06-89af-xxx
     *
     * @var string
     */
    public $foundationVersionUID;

    /**
     * @example d26ddfad-fa97-4a2b-9433-xxx
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'clusterConfig'        => 'clusterConfig',
        'foundationVersionUID' => 'foundationVersionUID',
        'uid'                  => 'uid',
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
        if (null !== $this->foundationVersionUID) {
            $res['foundationVersionUID'] = $this->foundationVersionUID;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
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
        if (isset($map['clusterConfig'])) {
            $model->clusterConfig = $map['clusterConfig'];
        }
        if (isset($map['foundationVersionUID'])) {
            $model->foundationVersionUID = $map['foundationVersionUID'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
