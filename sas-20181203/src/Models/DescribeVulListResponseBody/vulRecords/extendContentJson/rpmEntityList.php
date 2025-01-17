<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords\extendContentJson;

use AlibabaCloud\Dara\Model;

class rpmEntityList extends Model
{
    /**
     * @var string
     */
    public $containerName;
    /**
     * @var string
     */
    public $extendField;
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
     * @var string[]
     */
    public $matchList;
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
    public $pid;
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
        'extendField'   => 'ExtendField',
        'fullVersion'   => 'FullVersion',
        'imageName'     => 'ImageName',
        'matchDetail'   => 'MatchDetail',
        'matchList'     => 'MatchList',
        'name'          => 'Name',
        'path'          => 'Path',
        'pid'           => 'Pid',
        'updateCmd'     => 'UpdateCmd',
        'version'       => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->matchList)) {
            Model::validateArray($this->matchList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }

        if (null !== $this->extendField) {
            $res['ExtendField'] = $this->extendField;
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

        if (null !== $this->matchList) {
            if (\is_array($this->matchList)) {
                $res['MatchList'] = [];
                $n1               = 0;
                foreach ($this->matchList as $item1) {
                    $res['MatchList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->updateCmd) {
            $res['UpdateCmd'] = $this->updateCmd;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }

        if (isset($map['ExtendField'])) {
            $model->extendField = $map['ExtendField'];
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

        if (isset($map['MatchList'])) {
            if (!empty($map['MatchList'])) {
                $model->matchList = [];
                $n1               = 0;
                foreach ($map['MatchList'] as $item1) {
                    $model->matchList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
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
