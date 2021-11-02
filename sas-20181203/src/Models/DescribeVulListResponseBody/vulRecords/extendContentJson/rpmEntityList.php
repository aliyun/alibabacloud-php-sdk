<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords\extendContentJson;

use AlibabaCloud\Tea\Model;

class rpmEntityList extends Model
{
    /**
     * @var string
     */
    public $containerName;

    /**
     * @var string
     */
    public $fullVersion;

    /**
     * @var string
     */
    public $imageName;

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

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'containerName' => 'ContainerName',
        'fullVersion'   => 'FullVersion',
        'imageName'     => 'ImageName',
        'matchDetail'   => 'MatchDetail',
        'name'          => 'Name',
        'path'          => 'Path',
        'updateCmd'     => 'UpdateCmd',
        'version'       => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->fullVersion) {
            $res['FullVersion'] = $this->fullVersion;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
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
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['FullVersion'])) {
            $model->fullVersion = $map['FullVersion'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
