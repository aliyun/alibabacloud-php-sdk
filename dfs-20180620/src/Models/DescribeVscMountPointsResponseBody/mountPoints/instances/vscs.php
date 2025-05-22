<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models\DescribeVscMountPointsResponseBody\mountPoints\instances;

use AlibabaCloud\Dara\Model;

class vscs extends Model
{
    /**
     * @var string
     */
    public $vscId;

    /**
     * @var string
     */
    public $vscName;

    /**
     * @var string
     */
    public $vscStatus;

    /**
     * @var string
     */
    public $vscType;
    protected $_name = [
        'vscId' => 'VscId',
        'vscName' => 'VscName',
        'vscStatus' => 'VscStatus',
        'vscType' => 'VscType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vscId) {
            $res['VscId'] = $this->vscId;
        }

        if (null !== $this->vscName) {
            $res['VscName'] = $this->vscName;
        }

        if (null !== $this->vscStatus) {
            $res['VscStatus'] = $this->vscStatus;
        }

        if (null !== $this->vscType) {
            $res['VscType'] = $this->vscType;
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
        if (isset($map['VscId'])) {
            $model->vscId = $map['VscId'];
        }

        if (isset($map['VscName'])) {
            $model->vscName = $map['VscName'];
        }

        if (isset($map['VscStatus'])) {
            $model->vscStatus = $map['VscStatus'];
        }

        if (isset($map['VscType'])) {
            $model->vscType = $map['VscType'];
        }

        return $model;
    }
}
