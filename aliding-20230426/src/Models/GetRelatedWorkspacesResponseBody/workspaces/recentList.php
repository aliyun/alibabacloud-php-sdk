<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetRelatedWorkspacesResponseBody\workspaces;

use AlibabaCloud\Tea\Model;

class recentList extends Model
{
    /**
     * @example 1638256965936
     *
     * @var int
     */
    public $lastEditTime;

    /**
     * @example 知识库
     *
     * @var string
     */
    public $name;

    /**
     * @example nb9XxxxxxxmyAp
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example https://alidocs.xxxx/nb9XJKdxxxxmyAp
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'lastEditTime' => 'LastEditTime',
        'name'         => 'Name',
        'nodeId'       => 'NodeId',
        'url'          => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastEditTime) {
            $res['LastEditTime'] = $this->lastEditTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recentList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastEditTime'])) {
            $model->lastEditTime = $map['LastEditTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
