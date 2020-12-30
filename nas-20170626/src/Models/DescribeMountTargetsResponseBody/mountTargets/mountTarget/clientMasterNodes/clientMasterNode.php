<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponseBody\mountTargets\mountTarget\clientMasterNodes;

use AlibabaCloud\Tea\Model;

class clientMasterNode extends Model
{
    /**
     * @var string
     */
    public $ecsId;

    /**
     * @var string
     */
    public $defaultPasswd;

    /**
     * @var string
     */
    public $ecsIp;
    protected $_name = [
        'ecsId'         => 'EcsId',
        'defaultPasswd' => 'DefaultPasswd',
        'ecsIp'         => 'EcsIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsId) {
            $res['EcsId'] = $this->ecsId;
        }
        if (null !== $this->defaultPasswd) {
            $res['DefaultPasswd'] = $this->defaultPasswd;
        }
        if (null !== $this->ecsIp) {
            $res['EcsIp'] = $this->ecsIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientMasterNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsId'])) {
            $model->ecsId = $map['EcsId'];
        }
        if (isset($map['DefaultPasswd'])) {
            $model->defaultPasswd = $map['DefaultPasswd'];
        }
        if (isset($map['EcsIp'])) {
            $model->ecsIp = $map['EcsIp'];
        }

        return $model;
    }
}
