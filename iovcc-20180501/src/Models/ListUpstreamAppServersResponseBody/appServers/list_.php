<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListUpstreamAppServersResponseBody\appServers;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $queueNameList;

    /**
     * @var string
     */
    public $PAppKey;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'projectId'     => 'ProjectId',
        'gmtCreate'     => 'GmtCreate',
        'tags'          => 'Tags',
        'queueNameList' => 'QueueNameList',
        'PAppKey'       => 'PAppKey',
        'gmtModified'   => 'GmtModified',
        'name'          => 'Name',
        'id'            => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->queueNameList) {
            $res['QueueNameList'] = $this->queueNameList;
        }
        if (null !== $this->PAppKey) {
            $res['PAppKey'] = $this->PAppKey;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['QueueNameList'])) {
            $model->queueNameList = $map['QueueNameList'];
        }
        if (isset($map['PAppKey'])) {
            $model->PAppKey = $map['PAppKey'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
