<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetRelatedWorkspacesResponseBody\workspaces;

use AlibabaCloud\Dara\Model;

class recentList extends Model
{
    /**
     * @var int
     */
    public $lastEditTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'lastEditTime' => 'LastEditTime',
        'name' => 'Name',
        'nodeId' => 'NodeId',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
