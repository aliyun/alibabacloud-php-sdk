<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords\extendContentJson;

use AlibabaCloud\Tea\Model;

class rpmEntityList extends Model
{
    /**
     * @description The name of the container.
     *
     * @example k8s_67895c4_xxx
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The complete version number.
     *
     * @example 3.10.0-693.2.2.el7
     *
     * @var string
     */
    public $fullVersion;

    /**
     * @description The name of the image.
     *
     * @example registry_387ytb_xxx
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The reason why the vulnerability is detected.
     *
     * @example python-perf version less than 0:3.10.0-693.21.1.el7
     *
     * @var string
     */
    public $matchDetail;

    /**
     * @description The rules that are used to detect the vulnerability.
     *
     * @var string[]
     */
    public $matchList;

    /**
     * @description The name of the RPM package.
     *
     * @example python-perf
     *
     * @var string
     */
    public $name;

    /**
     * @description The path to the software that has the vulnerability.
     *
     * @example /usr/lib64/python2.7/site-packages
     *
     * @var string
     */
    public $path;

    /**
     * @description The process ID.
     *
     * @example 8664
     *
     * @var string
     */
    public $pid;

    /**
     * @description The command that is used to fix the vulnerability.
     *
     * @example *** update python-perf
     *
     * @var string
     */
    public $updateCmd;

    /**
     * @description The version number of the package of the software that has the vulnerability.
     *
     * @example 3.10.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'containerName' => 'ContainerName',
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
        if (null !== $this->matchList) {
            $res['MatchList'] = $this->matchList;
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
        if (isset($map['MatchList'])) {
            if (!empty($map['MatchList'])) {
                $model->matchList = $map['MatchList'];
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
