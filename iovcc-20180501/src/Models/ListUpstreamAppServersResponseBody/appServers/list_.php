<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListUpstreamAppServersResponseBody\appServers;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $PAppKey;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $queueNameList;
    protected $_name = [
        'id'            => 'Id',
        'PAppKey'       => 'PAppKey',
        'projectId'     => 'ProjectId',
        'name'          => 'Name',
        'tags'          => 'Tags',
        'gmtCreate'     => 'GmtCreate',
        'gmtModified'   => 'GmtModified',
        'queueNameList' => 'QueueNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->PAppKey) {
            $res['PAppKey'] = $this->PAppKey;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->queueNameList) {
            $res['QueueNameList'] = $this->queueNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PAppKey'])) {
            $model->PAppKey = $map['PAppKey'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['QueueNameList'])) {
            $model->queueNameList = $map['QueueNameList'];
        }

        return $model;
    }
}
