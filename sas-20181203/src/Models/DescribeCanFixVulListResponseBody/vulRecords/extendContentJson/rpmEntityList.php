<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCanFixVulListResponseBody\vulRecords\extendContentJson;

use AlibabaCloud\Dara\Model;

class rpmEntityList extends Model
{
    /**
     * @var string
     */
    public $fullVersion;

    /**
     * @var string
     */
    public $layer;

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
    public $updateCmd;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'fullVersion' => 'FullVersion',
        'layer' => 'Layer',
        'matchDetail' => 'MatchDetail',
        'matchList' => 'MatchList',
        'name' => 'Name',
        'path' => 'Path',
        'updateCmd' => 'UpdateCmd',
        'version' => 'Version',
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
            if (\is_array($this->matchList)) {
                $res['MatchList'] = [];
                $n1 = 0;
                foreach ($this->matchList as $item1) {
                    $res['MatchList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->matchList = [];
                $n1 = 0;
                foreach ($map['MatchList'] as $item1) {
                    $model->matchList[$n1] = $item1;
                    ++$n1;
                }
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
