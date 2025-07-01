<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\mountTargets\mountTarget\clientMasterNodes;

use AlibabaCloud\Dara\Model;

class clientMasterNode extends Model
{
    /**
     * @var string
     */
    public $defaultPasswd;

    /**
     * @var string
     */
    public $ecsId;

    /**
     * @var string
     */
    public $ecsIp;
    protected $_name = [
        'defaultPasswd' => 'DefaultPasswd',
        'ecsId' => 'EcsId',
        'ecsIp' => 'EcsIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultPasswd) {
            $res['DefaultPasswd'] = $this->defaultPasswd;
        }

        if (null !== $this->ecsId) {
            $res['EcsId'] = $this->ecsId;
        }

        if (null !== $this->ecsIp) {
            $res['EcsIp'] = $this->ecsIp;
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
        if (isset($map['DefaultPasswd'])) {
            $model->defaultPasswd = $map['DefaultPasswd'];
        }

        if (isset($map['EcsId'])) {
            $model->ecsId = $map['EcsId'];
        }

        if (isset($map['EcsIp'])) {
            $model->ecsIp = $map['EcsIp'];
        }

        return $model;
    }
}
