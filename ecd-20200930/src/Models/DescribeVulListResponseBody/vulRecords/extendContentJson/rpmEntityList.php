<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulListResponseBody\vulRecords\extendContentJson;

use AlibabaCloud\Tea\Model;

class rpmEntityList extends Model
{
    /**
     * @var string
     */
    public $fullVersion;

    /**
     * @var string
     */
    public $matchDetail;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $updateCmd;
    protected $_name = [
        'fullVersion' => 'FullVersion',
        'matchDetail' => 'MatchDetail',
        'name'        => 'Name',
        'path'        => 'Path',
        'updateCmd'   => 'UpdateCmd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fullVersion) {
            $res['FullVersion'] = $this->fullVersion;
        }
        if (null !== $this->matchDetail) {
            $res['MatchDetail'] = $this->matchDetail;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->updateCmd) {
            $res['UpdateCmd'] = $this->updateCmd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rpmEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FullVersion'])) {
            $model->fullVersion = $map['FullVersion'];
        }
        if (isset($map['MatchDetail'])) {
            $model->matchDetail = $map['MatchDetail'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['UpdateCmd'])) {
            $model->updateCmd = $map['UpdateCmd'];
        }

        return $model;
    }
}
