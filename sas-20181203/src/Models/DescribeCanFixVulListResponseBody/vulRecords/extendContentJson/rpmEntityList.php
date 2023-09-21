<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCanFixVulListResponseBody\vulRecords\extendContentJson;

use AlibabaCloud\Tea\Model;

class rpmEntityList extends Model
{
    /**
     * @example 3.10.0-693.2.2.el7
     *
     * @var string
     */
    public $fullVersion;

    /**
     * @example b1f5b9420803ad0657cf21566e3e20acc08581e7f22991249ef3aa80b8b1****
     *
     * @var string
     */
    public $layer;

    /**
     * @example python-perf version less than 0:3.10.0-693.21.1.el7
     *
     * @var string
     */
    public $matchDetail;

    /**
     * @var string[]
     */
    public $matchList;

    /**
     * @example python-perf
     *
     * @var string
     */
    public $name;

    /**
     * @example /usr/lib64/python2.7/site-packages
     *
     * @var string
     */
    public $path;

    /**
     * @example apt-get update && apt-get install libseccomp2  --only-upgrade
     *
     * @var string
     */
    public $updateCmd;

    /**
     * @example 3.10.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'fullVersion' => 'FullVersion',
        'layer'       => 'Layer',
        'matchDetail' => 'MatchDetail',
        'matchList'   => 'MatchList',
        'name'        => 'Name',
        'path'        => 'Path',
        'updateCmd'   => 'UpdateCmd',
        'version'     => 'Version',
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
        if (null !== $this->layer) {
            $res['Layer'] = $this->layer;
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
        if (isset($map['FullVersion'])) {
            $model->fullVersion = $map['FullVersion'];
        }
        if (isset($map['Layer'])) {
            $model->layer = $map['Layer'];
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
        if (isset($map['UpdateCmd'])) {
            $model->updateCmd = $map['UpdateCmd'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
